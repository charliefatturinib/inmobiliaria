<?php
class Casa
{
        protected $id;
        protected $tipo;
        protected $venta;
        protected $barrio;
        protected $calle;
        protected $ambientes;
        protected $condicion;
        protected $orientacion;
        protected $terraza;
        protected $cochera;
        protected $espacios;
        protected $imagen;
        protected $id_departamento;
        protected $id_ph;
        protected $id_casa;



        //devolver el listado completo de los personajes


        public function lista_completa(): array
        {
                $resultado = [];

                $conexion = (new Conexion())->getConexion();

                $query = "SELECT * FROM  casas";

                $PDOStatment = $conexion->prepare($query);

                $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
                $PDOStatment->execute();

                $resultado = $PDOStatment->fetchAll();

                return $resultado;
        }




        // devuelve los datos de un artista en particular 

        public function get_x_id(int $id)
        {


                $conexion = (new Conexion())->getConexion();

                $query = "SELECT * FROM casas WHERE id = $id";

                $PDOStatment = $conexion->prepare($query);

                $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
                $PDOStatment->execute();

                $resultado = $PDOStatment->fetch();

                if (!$resultado) {
                        return null;
                }

                return $resultado;
        }



        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }



        /**
         * Get the value of tipo
         */
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Get the value of venta
         */
        public function getVenta()
        {
                return $this->venta;
        }

        /**
         * Get the value of barrio
         */
        public function getBarrio()
        {
                return $this->barrio;
        }

        /**
         * Get the value of calle
         */
        public function getCalle()
        {
                return $this->calle;
        }

        /**
         * Get the value of ambientes
         */
        public function getAmbientes()
        {
                return $this->ambientes;
        }

        /**
         * Get the value of condicion
         */
        public function getCondicion()
        {
                return $this->condicion;
        }

        /**
         * Get the value of orientacion
         */
        public function getOrientacion()
        {
                return $this->orientacion;
        }

        /**
         * Get the value of terraza
         */
        public function getTerraza()
        {
                return $this->terraza;
        }

        /**
         * Get the value of cochera
         */
        public function getCochera()
        {
                return $this->cochera;
        }

        /**
         * Get the value of espacios
         */
        public function getEspacios()
        {
                return $this->espacios;
        }

        /**
         * Get the value of imagen
         */
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Get the value of id_departamento
         */
        public function getId_departamento()
        {
                return $this->id_departamento;
        }

        /**
         * Get the value of id_ph
         */
        public function getId_ph()
        {
                return $this->id_ph;
        }

        /**
         * Get the value of id_casa
         */
        public function getId_casa()
        {
                return $this->id_casa;
        }
}
