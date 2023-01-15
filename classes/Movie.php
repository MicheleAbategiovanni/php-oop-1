<?php

class Movie
{
    private $name;
    private $language;
    private $genre;
    public $vote;

    function __construct($_name, $_genre, $_language, $_vote)
    {

        $this->setName($_name);
        $this->setLanguage($_language);
        $this->setGenre($_genre);
        if ($_vote != null) {
            $this->setVote($_vote);
        }
    }
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set the value of language
     *
     * @return  self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Get the value of genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * Get the value of vote
     */
    public function getVote()
    {


        return $this->vote;
    }

    /**
     * Set the value of vote
     *
     * @return  self
     */
    public function setVote($vote)
    {
        if ($vote === "1") {

            $vote = "Muy Bad";

            $this->vote = $vote;
        } else if ($vote === "2" || $vote === "3") {

            $vote = "So so";

            $this->vote = $vote;
        } else if ($vote === "4" || $vote === "5") {

            $vote = "Beatiful";

            $this->vote = $vote;
        }
    }
}
