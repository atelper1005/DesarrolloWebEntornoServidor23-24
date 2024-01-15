<?php
    // Todos los controladores se crean a partir del controlador
    class Alumno Extends Controller {

        function __construct() {
            
            parent ::__construct();
            
            
        }
        // Render se ejecuta por defecto, es decir, se ejecuta cuando en la URL no hay un segundo parametro
        function render() {
            //Inicio sesion
            session_start();

            //Mensaje
            if(isset($_SESSION['mensaje'])){
                $this->view->mensaje = $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }

            //Propiedad title
            $this->view->title = "Home - Panel de control Alumnos";

            // Creo la propiedad alumnos dentro de la vista del modelo asignado al controlador, y ejecuto el modelo get(); 
            $this->view->alumnos = $this->model->get();
            
            // Cargara la vista alumno
            $this->view->render('alumno/main/index');
        }

        /**
         * Método new
         * Creamos un nuevo alumno
         */
        function new(){
            //Inicio sesion
            session_start();

            # Creamos un objeto vacio
            $this->view->alumno = new classAlumno();

            //Comprobacion errores
            if(isset($_SESSION['error'])){
                // rescatemos el mensaje
                $this->view->error = $_SESSION['error'];
    
                // Autorellenamos el formulario
                $this->view->alumno = unserialize($_SESSION['alumno']);
    
                // Recupero array de errores específicos
                $this->view->errores = $_SESSION['errores'];
    
                // debemos liberar las variables de sesión ya que su cometido ha sido resuelto
                unset($_SESSION['error']);
                unset($_SESSION['errores']);
                unset($_SESSION['alumnos']);
                
            }

            // Etiqueta titulo
            $this->view->title = "Añadir - Gestión Alumnos";

            // Obtenemos los cursos para la lista dinamica
            $this->view->cursos = $this->model->getCursos();

            // Cargamos la vista con el formulario
            $this->view->render('alumno/new/index');
        }

        /**
         * Método create
         * Introducimos un nuevo alumno a la base de datos
         */
        function create($param = []){

            //Iniciar sesion
            session_start();

            # 1. Seguridad. Saneamos los datos del formulario
            $nombre = filter_var($_POST['nombre'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
            $apellidos = filter_var($_POST['apellidos'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_var($_POST['email'] ??= '', FILTER_SANITIZE_EMAIL);
            $telefono = filter_var($_POST['telefono'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
            $poblacion = filter_var($_POST['poblacion'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
            $dni = filter_var($_POST['dni'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
            $fechaNac = filter_var($_POST['fechaNac'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
            $id_curso = filter_var($_POST['id_curso'] ??= '', FILTER_SANITIZE_NUMBER_INT);

            # 2. Creamos alumno con los datos saneados
            $alumno = new classAlumno(null,
            $nombre,
            $apellidos,
            $email,
            $telefono,
            null,
            $poblacion,
            null,
            null,
            $dni,
            $fechaNac,
            $id_curso,
        );

            # 3. Validacion
            $errores = [];

            //Nombre: obligatorio
            if (empty($nombre)) {
                $errores['nombre'] = 'El campo nombre es obligatorio';
            }

            //Apellidos: obligatorio
            if (empty($apellidos)) {
                $errores['apellidos'] = 'El campo apellidos es obligatorio';
            }

            //Fecha Nacimiento: obligatorio
            // $valores = explode('/', $fechaNac);
            // if (empty($fechaNac)) {
            //     $errores['fechaNac'] = 'El campo fechaNac es obligatorio';
            // } else if (!checkdate($valores[1], $valores[0], $valores[2])) {
            //     $errores['fechaNac'] = 'Fecha no válida';
            // }

            //Email: obligatorio, formato válido y único(clave secundaria)
            if (empty($email)) {
                $errores['email'] = 'El campo email es obligatorio';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errores['email'] = 'No es un formato de email válido';
            } else if (!$this->model->validateUniqueEmail($email)) {
                $errores['email'] = 'Email existente';
            }

            //DNI: obligatorio, formato válido y único(clave secundaria)
            $options = [
                'options' => [
                    'regexp' => '/^(\d{8})([a-zA-Z])$/'
                ]
            ];

            if (empty($dni)) {
                $errores['dni'] = 'El campo DNI es obligatorio';
            } else if (!filter_var($dni, FILTER_VALIDATE_REGEXP, $options)) {
                $errores['dni'] = 'No es un formato de DNI válido';
            } else if (!$this->model->validateUniqueDNI($dni)) {
                $errores['dni'] = 'DNI existente';
            }

            //id_curso: obligatorio, entero, existente
            if (empty($id_curso)) {
                $errores['id_curso'] = 'El campo id_curso es obligatorio';
            } else if (!filter_var($id_curso, FILTER_VALIDATE_INT)) {
                $errores['id_curso'] = 'No es un formato de id_curso válido';
            } else if (!$this->model->validateCurso($id_curso)) {
                $errores['id_curso'] = 'Curso no existente';
            }

            # 4. Comprobar validación
            if (!empty($errores)) {
                //errores de validacion
                $_SESSION['alumno'] = serialize($alumno);
                $_SESSION['error'] = 'Formulario no validado';
                $_SESSION['errores'] = $errores;

                # Redireccionamos
                header('location:'.URL.'alumno/new');
            } else {
                // Añadimos el registro a la tabla
                $this->model->create($alumno);

                //Mensaje
                $_SESSION['mensaje'] = 'Alumno creado correctamente';

                // Redireccionamos
                header('Location:'.URL.'alumno');
            }
        }

        /**
         * Método edit
         * Editar un registro de la base de datos
         */
        public function edit($param = []){
            // Obtengo el id del alumno que voy a editar
            // Ejemplo url: alumno/edit/4, siendo "alumno" el controlador, "edit" el método empleado y "4" el parametro
            $id = $param[0];

            // Asigno id a una propiedad de la vista
            $this->view->id = $id;

            // Título de la página
            $this->view->title = "Editar - Panel de control Alumnos";

            // Obtengo un objeto de la clase alumno
            $this->view->alumno = $this->model->read($id);

            // Obtenemos los cursos para la lista dinamica
            $this->view->cursos = $this->model->getCursos();

            // Cargamos la vista con el formulario
            $this->view->render('alumno/edit/index');
        }

        /**
         * Método update
         * Actualizar un registro de la base de datos
         */
        public function update($param=[]){
            //Inicio sesion
            session_start();

             # 1. Saneamos los datos del formulario
        # Saneamos los datos del formulario
        // $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_SPECIAL_CHARS); sin operador de saignación de fusión de null
        $nombre = filter_var($_POST['nombre'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS); // con operador de saignación de fusión de null
        $apellidos = filter_var($_POST['apellidos'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var($_POST['email'] ??= '', FILTER_SANITIZE_EMAIL);
        $telefono = filter_var($_POST['telefono'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
        $poblacion = filter_var($_POST['poblacion'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
        $dni = filter_var($_POST['dni'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
        $fechaNac = filter_var($_POST['fechaNac'] ??= '', FILTER_SANITIZE_SPECIAL_CHARS);
        $id_curso = filter_var($_POST['id_curso'] ??= '', FILTER_SANITIZE_NUMBER_INT);


        # Cargo id del alumno
        $id = $param[0];

        # Con los detalles formulario creo objeto alumno a partir de los datos saneados
        $alumno = new classAlumno(

            null,
            $nombre,
            $apellidos,
            $email,
            $telefono,
            null,
            $poblacion,
            null,
            null,
            $dni,
            $fechaNac,
            $id_curso

        );

        # Cargo id del alumno a original
        $id = $param[0]; /// lo tenemos más arriva solo como ejemplo

        $alumno_original = $this->model->read($id);

        # VALIDACION
        // Sólo si es necesario
        // Sólo en caso de modificación el campo

        $errores = [];

        // validar nombre
        if (strcmp($alumno->nombre, $alumno_original->nombre) !== 0) { // EN PHP NO PODEMOS COMPARAR DOS STRING CON ==
            // nombre oblogatiorio
            if (empty($nombre)) {
                $errores['nombre'] = 'El campo es obligatorio';
            }
        }

        // validar nombre
        if (strcmp($nombre, $alumno_original->nombre) !== 0) { // EN PHP NO PODEMOS COMPARAR DOS STRING CON ==
            // nombre oblogatiorio
            if (empty($nombre)) {
                $errores['nombre'] = 'El campo es obligatorio';
            }
        }

        // validar apellidos
        if (strcmp($apellidos, $alumno_original->apellidos) !== 0) { // EN PHP NO PODEMOS COMPARAR DOS STRING CON ==
            // nombre oblogatiorio
            if (empty($apellidos)) {
                $errores['apellidos'] = 'El campo es obligatorio';
            }
        }

        // validar email
        if (strcmp($email, $alumno_original->email) !== 0) { // EN PHP NO PODEMOS COMPARAR DOS STRING CON ==
            // Email: obligatorio, formato válido y clave secundario
            if (empty($email)) {
                $errores['email'] = 'El campo es obligatorio';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // VALIDAMOS EL EMAIL -> retorna booleano
                $errores['email'] = 'El formato del email no es válido';
            } else if (!$this->model->validateUniqueEmail($email)) {
                $errores['email'] = 'El email ya ha sido registrado';
            }
        }



        // DNI: obligatorio, formato válido y único
        $options = [
            'options' => [ // ESTOS PARÁMETROS DEBEN LLAMARSE ASÍ
                'regexp' => '/^(\d{8})([a-zA-Z])$/'
            ]
        ];
        // validar dni
        if (strcmp($dni, $alumno_original->dni) !== 0) {
            if (empty($dni)) {
                $errores['dni'] = 'El campo es obligatorio';
            } else if (!filter_var($dni, FILTER_VALIDATE_REGEXP, $options)) { // VALIDAMOS EL EMAIL -> retorna booleano
                $errores['dni'] = 'El formato del dni no es válido';
            } else if (!$this->model->validateUniqueDni($dni)) {
                $errores['dni'] = 'El dni ya ha sido registrado';
            }
        }


        if (strcmp($id_curso, $alumno_original->id_curso) !== 0) {
            // Validamos id_curso: obligatorio, número entero y existente
            if (empty($id_curso)) {
                $errores['id_curso'] = 'Debe seleccionar un curso';
            } else if (!filter_var($id_curso, FILTER_VALIDATE_INT)) { // VALIDAMOS EL EMAIL -> retorna booleano
                $errores['id_curso'] = 'El curso no es válido';
            } else if (!$this->model->validateCurso($id_curso)) {
                $errores['id_curso'] = 'El Curso no existe';
            }
        }

        
        # Comprobamos validacion
        if (!empty($errores)) {
            // errores de validacion
            $_SESSION['alumno'] = serialize($alumno); // serializamos para tornar el objeto a string
            $_SESSION['error'] = 'Formulario no validado';
            $_SESSION['errores'] = $errores;

            # Redireccionamos a 
            header('location:' . URL . 'alumno/edit/'.$id);
        } else {
            # Añadir registro a la tabla
            $this->model->update($alumno, $id);

            # Mensaje
            $_SESSION['mensaje'] = "Alumno editado correctamente";

            # Redirigimos al main de alumnos
            header('location:' . URL . 'alumno');
        }

        }

        /**
         * Método order
         * Ordena un registro
         */
        public function order($param = [])
    {

        # Obtengo criterio de ordenación
        $criterio = $param[0];

        # Creo la propiedad title de la vista
        $this->view->title = "Ordenar - Panel Control Alumnos";

        # Creo la propiedad alumnos dentro de la vista
        # Del modelo asignado al controlador ejecuto el método get();
        $this->view->alumnos = $this->model->order($criterio);

        # Cargo la vista principal de alumno
        $this->view->render('alumno/main/index');
    }

    public function filter($param = [])
    {

        # Obtengo expresión de búsqueda
        $expresion = $_GET['expresion'];

        # Creo la propiedad title de la vista
        $this->view->title = "Buscar - Panel Control Alumnos";

        # Filtro a partir de la  expresión
        $this->view->alumnos = $this->model->filter($expresion);

        # Cargo la vista principal de alumno
        $this->view->render('alumno/main/index');
    }

    public function delete($param = [])
    {
        //Inicio sesion
        session_start();

        //Obtener id
        $id = $param[0];

        # Filtro a partir de la  expresión
        $this->model->delete($id);

        # Cargo la vista principal de alumno
        $this->view->render('alumno/main/index');
    }

}

?>