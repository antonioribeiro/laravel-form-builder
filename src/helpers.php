<?php

use Kris\LaravelFormBuilder\Fields\FormField;
use Kris\LaravelFormBuilder\Form;

if (!function_exists('form')) {

    function form(Form $form, array $options = [])
    {
        return $form->renderForm($options);
    }

}

if (!function_exists('form_start')) {

    function form_start(Form $form, array $options = [])
    {
        return $form->renderForm($options, true, false, false);
    }

}

if (!function_exists('form_end')) {

    function form_end(Form $form, array $options = [])
    {
        return $form->renderForm($options, false, false, true);
    }

}

if (!function_exists('form_rest')) {

    function form_rest(Form $form, array $options = [])
    {
        return $form->renderRest($options, false, false, true);
    }

}

if (!function_exists('form_row')) {

    function form_row(FormField $formField, array $options = [])
    {
        return $formField->render($options);
    }

}

if (!function_exists('form_label')) {

    function form_label(FormField $formField, array $options = [])
    {
        return $formField->render($options, true, false, false);
    }

}

if (!function_exists('form_widget')) {

    function form_widget(FormField $formField, array $options = [])
    {
        return $formField->render($options, false, true, false);
    }

}

if (!function_exists('form_errors')) {

    function form_errors(FormField $formField, array $options = [])
    {
        return $formField->render($options, false, false, true);
    }

}
