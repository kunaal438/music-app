<?php

    class Album {
        private $con;
        private $id;
        private $data;

        public function __construct($con, $albumId)
        {  
            $this->con = $con;
            $this->id = $albumId;

            $query = mysqli_query($this->con, "SELECT * FROM albums WHERE id='".$this->id."'");
            $data = mysqli_fetch_array($query);

            $this->data = $data;
        }

        public function getTitle() {
            return $this->data['title'];
        }

        public function getArtist() {
            return new Artist($this->con, $this->data['artist']);
        }

        public function getGenre() {
            return $this->data['genre'];
        }

        public function getArtworkPath() {
            return $this->data['artworkPath'];
        }

        public function getTotalSong() {
            $query = mysqli_query($this->con, "SELECT id FROM songs WHERE album='".$this->id."'");

            return mysqli_num_rows($query);
        }

    }

?>