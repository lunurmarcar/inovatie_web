@echo off
echo Creando estructura MVC para inovatie_web...

set BASE=inovatie_web

REM --- app ---
mkdir %BASE%\app
mkdir %BASE%\app\config
mkdir %BASE%\app\controllers
mkdir %BASE%\app\controllers\api
mkdir %BASE%\app\models
mkdir %BASE%\app\helpers
mkdir %BASE%\app\views
mkdir %BASE%\app\views\layouts
mkdir %BASE%\app\views\partials
mkdir %BASE%\app\views\pages
mkdir %BASE%\app\views\pages\productos
mkdir %BASE%\app\views\pages\legal
mkdir %BASE%\app\views\pages\admin
mkdir %BASE%\app\views\components
mkdir %BASE%\app\views\components\modals
mkdir %BASE%\app\views\components\tables
mkdir %BASE%\app\views\components\forms
mkdir %BASE%\app\views\components\cards

REM --- assets ---
mkdir %BASE%\assets
mkdir %BASE%\assets\css
mkdir %BASE%\assets\js
mkdir %BASE%\assets\img
mkdir %BASE%\assets\fonts

REM --- logs ---
mkdir %BASE%\logs

REM --- seo ---
mkdir %BASE%\seo

REM --- Crear archivos vacíos ---
type nul > %BASE%\index.php
type nul > %BASE%\.htaccess

type nul > %BASE%\app\config\config.php
type nul > %BASE%\app\config\db.php

type nul > %BASE%\app\controllers\HomeController.php
type nul > %BASE%\app\controllers\ProductController.php
type nul > %BASE%\app\controllers\PageController.php
type nul > %BASE%\app\controllers\ContactController.php
type nul > %BASE%\app\controllers\AdminController.php

type nul > %BASE%\app\controllers\api\CatalogApi.php
type nul > %BASE%\app\controllers\api\LeadsApi.php

type nul > %BASE%\app\models\Product.php
type nul > %BASE%\app\models\Lead.php
type nul > %BASE%\app\models\Quote.php
type nul > %BASE%\app\models\User.php

type nul > %BASE%\app\helpers\Security.php
type nul > %BASE%\app\helpers\Paginator.php
type nul > %BASE%\app\helpers\Logger.php

type nul > %BASE%\app\views\layouts\main.php
type nul > %BASE%\app\views\layouts\admin.php

type nul > %BASE%\app\views\partials\header.php
type nul > %BASE%\app\views\partials\navbar.php
type nul > %BASE%\app\views\partials\footer.php
type nul > %BASE%\app\views\partials\breadcrumbs.php

type nul > %BASE%\app\views\pages\home.php
type nul > %BASE%\app\views\pages\productos\index.php
type nul > %BASE%\app\views\pages\productos\detalle.php
type nul > %BASE%\app\views\pages\legal\privacidad.php
type nul > %BASE%\app\views\pages\legal\terminos.php

type nul > %BASE%\logs\error.app.log

type nul > %BASE%\seo\robots.txt
type nul > %BASE%\seo\sitemap.xml

echo Estructura creada correctamente.
pause
