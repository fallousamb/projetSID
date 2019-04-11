<?php

namespace App\Table;
use Core\Table\TableFactory;

class ArticleTable extends TableFactory {
    protected $table = 'article';

    /**
     * Recupere les derniers articles
     *@return array
     */
    public function getLast(){
        return $this->query("
            SELECT A.id, A.titre, A.contenu, categorie.titre as categorie
            FROM article A
            LEFT JOIN categorie
              ON A.id_categorie = categorie.id
            ORDER BY A.date DESC
        ");

    }

    /**
     * Recupere les informations de l'article
     * @params $id int
     * return \App\Entity\ArticleEntity
     */
    public function find($id){
        return $this->query("
            SELECT A.id, A.titre, A.contenu, categorie.titre as categorie, categorie.id as categorieID
            FROM article A
            LEFT JOIN categorie
              ON A.id_categorie = categorie.id
            WHERE A.id = ?
        ", [$id], true);

    }

    /**
     * Recuprere les articles de la categorie
     * @params $id_categorie int
     * return \App\Entity\ArticleEntity
     */
    public function lastByCategory($id_categorie){
        return $this->query("
            SELECT A.id, A.titre, A.contenu, categorie.titre as categorie
            FROM article A
            LEFT JOIN categorie
              ON A.id_categorie = categorie.id
            WHERE A.id_categorie = ?
            ORDER BY A.date DESC
        ", [$id_categorie]);

    }
}