<?php

const SERVERURL = "http://localhost/rutas/";
const COMPANY = "Empresa ABC";
const VERSION = "1.0";
date_default_timezone_set("America/Lima");

// Métodos comúnes en toda la App
function renderContentHeader($title = "", $root = "")
{
  return "
    <div class='content-header'>
      <div class='container-fluid'>
        <div class='row mb-2'>
          <div class='col-sm-6'>
            <h1 class='m-0'>{$title}</h1>
          </div>
          <div class='col-sm-6'>
            <ol class='breadcrumb float-sm-right'>
              <li class='breadcrumb-item'><a href='#'>{$root}</a></li>
              <li class='breadcrumb-item active'>{$title}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  ";
}
