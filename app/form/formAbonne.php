<?php

namespace App\Form;

use app\entity\abonne;
use app\service\form;

class FormOuvrage
{
    static function buildCreateFormInUserRegister(): Form
    {
        $form = new Form();
        $form->debutForm('post', URL_ROOT . 'user/register/sport/add')
            ->ajoutLabelFor('sport', 'Sport')
            ->ajoutInput('text', 'design', ['id' => 'sport', 'class' => 'form-control'])
            ->ajoutBouton('Ajouter', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }

    static function buildCreateForm(): Form
    {
        $form = new Form();
        $form->debutForm('post', URL_ROOT . 'admin/sport/add')
            ->ajoutLabelFor('design', 'Design')
            ->ajoutInput('text', 'design', ['id' => 'design', 'class' => 'form-control'])
            ->ajoutBouton('Ajouter', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }

    public static function buildUpdateFormWithSport(ouvrage $ouvrage): Form
    {
        $form = new Form();
        $form->debutForm('post', URL_ROOT . 'admin/sport/update/' . $sport->id)
            ->ajoutLabelFor('design', 'Design')
            ->ajoutInput('text', 'design', ['id' => 'design', 'class' => 'form-control', 'value' => $sport->design])
            ->ajoutBouton('Modifier', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }

    public static function buildDeleteFormWithSport($sport): Form
    {
        $form = new Form();
        $form->debutForm('post', URL_ROOT . 'admin/sport/delete/' . $sport->id)
            ->ajoutBouton('Delete', ['class' => 'btn btn-danger'])
            ->finForm();
        return $form;
    }
}
