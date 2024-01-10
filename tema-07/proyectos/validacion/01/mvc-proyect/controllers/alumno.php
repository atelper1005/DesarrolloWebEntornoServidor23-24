<?php
    // Todos los controladores se crean a partir del controlador
    class Alumno Extends Controller {

        function __construct() {
            
            parent ::__construct();
            
            
        }
        // Render se ejecuta por defecto, es decir, se ejecuta cuando en la URL no hay un segundo parametro
        function render() {
            //
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
            $valores = explode('/', $fechaNac);
            if (empty($fechaNac)) {
                $errores['fechaNac'] = 'El campo fechaNac es obligatorio';
            } else if (!checkdate($valores[1], $valores[0], $valores[2])) {
                $errores['fechaNac'] = 'Fecha no válida';
            }

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
                    'regexp' => '/^(\d{8})([A-Z])$/'
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
            // Id del alumno
            $id = $param[0];

            // Asignamos el id a una propiedad de la vista
            $this->view->id = $id;

            // Cargamos los datos del formulario
            $alumno = new classAlumno(null,
            $_POST['nombre'],
            $_POST['apellidos'],
            $_POST['mail'],
            $_POST['telefono'],
            $_POST['direccion'],
            $_POST['poblacion'],
            $_POST['provincia'],
            $_POST['nacionalidad'],
            $_POST['dni'],
            $_POST['fechaNac'],
            $_POST['id_curso'],
        );

            // Actualizamos el registro de la base de datos
            $this->model->update($id,$alumno);

           // Redireccionamos
           header('Location:'.URL.'alumno');
        }

        /**
         * Método show
         * Muestra los detalles de un registro
         */
        function show($param = []){

        }
    }

?>