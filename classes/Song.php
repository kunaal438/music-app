<?php

    class Song{
        private $con;
        private $id;
        private $data;

        public function __construct($con, $id)
        {   
            $query = mysqli_query($con, "SELECT * FROM songs WHERE album='".$id."'");
            $this->data = $query;
            $this->con = $con;
            $this->id = $id;
        }

        public function getName() {
            return $this->data['title'];
        }

        public function getDuration() {
            return $this->data['duration'];
        }

        public function getpath() {
            return $this->data['path'];
        }

        public function getArtist() {
            return new Artist($this->con, $this->data['artist']);
        }

        public function getAlbum() {
            return new Album($this->con, $this->data['album']);
        }

        public function getGenre() {
            $query = mysqli_query($this->con, "SELECT name FROM genre WHERE id='".$this->data['genre']."'");
            return $query['name'];
        }

        public function getAlbumSongs(){
            return $this->data;
        }

    }

?>