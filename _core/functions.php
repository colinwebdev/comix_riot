<?php

// set time zone
// check for first run

// handle allocation of theme

// Don't need to store theme in a DB wtf
// Use a JSON or YAML file to store specific data about the theme if need be
// otherwise just check the theme folder
// require certain files

// Allow for more than 1 user

// Allow for different books, but can be out of order
// Set page for "new only" so it doesn't appear in archive
// Settings for blog to be separate from comic page
// 3 options: strict (only date matches otherwise blank blog), loose (closest previous date blog will appear with comic), or separate blog (newest shows and independant navigation)

// Include options for alt text and transcripts

// DBs to create:
// Paths
// Static pages
// Static content
// theme list?

// COMIXRIOT SETTINGS

session_start();

const CR_VERSION = "0.0.1";
const DB_PREFIX = "cmxr_";
const DOCS_VERSION = "0.0.0";

// DIRECTORIES 

const DOCS_DIR = "documentation";
const THEME_DIR = "themes";
const CORE_DIR = "_core";
const ADMIN_DIR = "_admin";
const COMICS_DIR = "assets/pages";

/* =============================================== 
                INITIALIZE
   =============================================== */

$first_run = CORE_DIR.'/first_run.php';

if (file_exists('_core/first_run.php')) {
    header('location:'.$first_run);
}

/* =============================================== 
                GLOBAL SETTINGS
   =============================================== */

// Time Zone set default

/* =============================================== 
                FUNCTIONS
   =============================================== */

//    Important stuff here