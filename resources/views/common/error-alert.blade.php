<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 26/11/2016
 * Time: 18:37
 */?>

@if (session('error'))
    <div class="container" style="position: relative;width: 100%;">
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Woops!</strong> {{ session('error') }}
        </div>
    </div>
@endif
