<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 26/11/2016
 * Time: 18:36
 */?>

@if (session('status'))
    <div class="container" style="position: relative;width: 100%;">
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{ session('status') }}
        </div>
    </div>
@endif
