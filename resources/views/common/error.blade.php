<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 07/09/16
 * Time: 14:43
 */ ?>

@if (count($errors) > 0)
        <!-- Form Error List -->
<div class="alert alert-danger">
    <strong>Whoops!!</strong>

    <br>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
