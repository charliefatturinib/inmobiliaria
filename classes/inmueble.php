<?php

class Inmueble
{
        //atributos
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


        //METODOS

        //metodo para insertar un nuevo inmbueble

        /* Metodo para insertar nuevo Inmobiliaria */

        public function insert($tipo, $venta, $barrio, $calle, $ambientes, $condicion, $orientacion, $terraza, $cochera, $espacios, $imagen, $id_departamento, $id_ph, $id_casa)
        {

                $conexion = (new Conexion())->getConexion();

                $query = "INSERT INTO inmobiliaria VALUES(null, :tipo, :venta, :barrio, :calle, :ambientes, :condicion, :orientacion, :terraza, :cochera, :espacios, :imagen, :id_departamento, :id_ph, :id_casa)";

                $PDOStatment = $conexion->prepare($query);

                $PDOStatment->execute(
                        [
                                'tipo' => $tipo,
                                'venta' => $venta,
                                'barrio' => $barrio,
                                'calle' => $calle,
                                'ambientes' => $ambientes,
                                'condicion' => $condicion,
                                'orientacion' => $orientacion,
                                'terraza' => $terraza,
                                'cochera' => $cochera,
                                'espacios' => $espacios,
                                'imagen' => $imagen,
                                'id_departamento' => $id_departamento,
                                'id_ph' => $id_ph,
                                'id_casa' => $id_casa,

                        ]
                );
        }


        // editar un inmobiliaria


        public function edit($tipo, $venta, $barrio, $calle, $ambientes, $condicion, $orientacion, $terraza, $cochera, $espacios, $imagen, $id_departamento, $id_ph, $id_casa, $id)
        {

                $conexion = (new Conexion())->getConexion();

                $query = "UPDATE inmobiliaria SET
                tipo = :tipo,
                venta = :venta,
                barrio = :barrio,
                calle = :calle,
                ambientes = :ambientes,
                condicion = :condicion,
                orientacion = :orientacion,
                terraza = :terraza,
                cochera= :cochera,
                espacios = :espacios,
                imagen = :imagen,
                id_departamento = :id_departamento,
                id_ph = :id_ph,
                id_casa = :id_casa
                WHERE id = :id
        
        ";

                $PDOStatment = $conexion->prepare($query);

                $PDOStatment->execute(
                        [
                                'id' => $id,
                                'tipo' => $tipo,
                                'venta' => $venta,
                                'barrio' => $barrio,
                                'calle' => $calle,
                                'ambientes' => $ambientes,
                                'condicion' => $condicion,
                                'orientacion' => $orientacion,
                                'terraza' => $terraza,
                                'cochera' => $cochera,
                                'espacios' => $espacios,
                                'imagen' => $imagen,
                                'id_departamento' => $id_departamento,
                                'id_ph' => $id_ph,
                                'id_casa' => $id_casa,

                        ]
                );
        }


        //Metodo Reemplazar Imagen del inmueble

        public function reemplazar_imagen($imagen, $id)
        {

                $conexion = (new Conexion())->getConexion();

                $query = "UPDATE inmobiliaria SET imagen = :imagen WHERE id = :id";

                $PDOStatment = $conexion->prepare($query);

                $PDOStatment->execute(
                        [
                                'id' => $id,
                                'imagen' => $imagen

                        ]
                );
        }

        // Borrar inmueble

        public function delete()
        {
                $conexion = (new Conexion())->getConexion();
                $query = "DELETE FROM inmobiliaria WHERE id = ? ";
                $PDOStatment = $conexion->prepare($query);

                $PDOStatment->execute([$this->id]);
        }






        //Metodos
        // Devuelve el catologo Completo
        public function catalogo_completo(): array
        {
                $catalogo = [];

                $conexion = (new Conexion())->getConexion();

                $query = "SELECT * FROM inmobiliaria";

                $PDOStatment = $conexion->prepare($query);

                $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
                $PDOStatment->execute();

                $catalogo = $PDOStatment->fetchAll();

                return $catalogo;
        }



        // Devuelve el catalogo de productos de un personaje en particular 
        public function catalogo_x_propiedad(int $id_departamento)
        {
                $catalogo = [];

                $conexion = (new Conexion())->getConexion();

                $query = "SELECT * FROM inmobiliaria WHERE id_departamento = $id_departamento";

                $PDOStatment = $conexion->prepare($query);

                $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
                $PDOStatment->execute();

                $catalogo = $PDOStatment->fetchAll();

                return $catalogo;
        }



        /* devolver es un producto en particular */

        /* marcador de posiciones , los marcadores de posiciones nos evitan vulnerabilidades como la inyeccion de SQL */

        public function renta_x_id(int $idRenta)
        {

                $conexion = (new Conexion())->getConexion();

                $query = "SELECT * FROM inmobiliaria WHERE id = :idRenta";

                $PDOStatment = $conexion->prepare($query);

                $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
                $PDOStatment->execute(
                        [
                                'idRenta' => $idRenta
                        ]
                );

                $resultado = $PDOStatment->fetch();

                if (!$resultado) {
                        return null;
                }

                return $resultado;
        }





        //Traer los nombres de cada clase sin usar JOIN (utilizar los metodos)

        public function getCasa()
        {
                $casa = (new Casa())->get_x_id($this->id_casa);
                $nombre = $casa->getNombre();
                return $nombre;
        }

        public function getDepartamento()
        {
                $departamento = (new Departamento())->get_x_id($this->id_departamento);
                $nombre = $departamento->getNombre_completo();
                return $nombre;
        }

        public function getPh()
        {
                $ph = (new Ph())->get_x_id($this->id_ph);
                $nombre = $ph->getNombre_completo();
                return $nombre;
        }

        



        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of titulo
         */
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Get the value of volumen
         */
        public function getVenta()
        {
                return $this->venta;
        }

        /**
         * Get the value of numero
         */
        public function getBarrio()
        {
                return $this->barrio;
        }

        /**
         * Get the value of publicacion
         */
        public function getCalle()
        {
                return $this->calle;
        }

        /**
         * Get the value of origen
         */
        public function getAmbientes()
        {
                return $this->ambientes;
        }

        /**
         * Get the value of editorial
         */
        public function getCondicion()
        {
                return $this->condicion;
        }

        /**
         * Get the value of bajada
         */
        public function getOrientacion()
        {
                return $this->orientacion;
        }

        /**
         * Get the value of portada
         */
        public function getTerraza()
        {
                return $this->terraza;
        }

        /**
         * Get the value of precio
         */
        public function getCochera()
        {
                return $this->cochera;
        }

        /**
         * Get the value of id_personaje
         */
        public function getEspacios()
        {
                return $this->espacios;
        }

        /**
         * Get the value of id_serie
         */
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Get the value of id_guionista
         */
        public function getId_departamento()
        {
                return $this->id_departamento;
        }

        /**
         * Get the value of id_artista
         */
        public function getId_ph()
        {
                return $this->id_ph;
        }

        /**
         * Get the value of id_artista
         */
        public function getId_casa()
        {
                return $this->id_casa;
        }
}