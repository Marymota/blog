<?php

/** Run queries (Assumes table already exists) */
function query(string $query, array $data = [])
{
    /** PDO prevents SQL injections */
    $string = "mysql:hostname=".DBHOST.";dbname=". DBNAME;
    $con = new PDO($string, DBUSER, DBPASS);

    // If database don't exist: create a new database
    $stm = $con->prepare($query);
    $stm->execute($data);

    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    if(is_array($result) && !empty($result))
    {
        return $result;
    }
    return false;
}

function redirect($page)
{
    header('Location: '.$page);
    die;
}

function old_value($key)
{
    if(!empty($_POST[$key]))
        return $_POST[$key];
    return "";
}

function old_checked($key)
{
    if(!empty($_POST[$key]))
        return " checked";
    return "";
}

/** Create URL friendly slugs from titles */
function str_to_url($url)
{
    /** Replace all single quotes (') with an empty string */
    $url = str_replace("´", "", $url);

    /** Replace all symbol characters with a dash (-) */
    $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);

    /** Remove all dashes that are in the beginning and end of a string */
    $url = trim("$url", "-");

    /** Convert to utf-8 */
    $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);

    /** Convert string to lower case */
    $url = strtolower($url);

    /** Remove all symbol characters (characters from other languages?) */
    $url = preg_replace('~[^-a-z0-9_]+~', '', $url);

    return $url;
}

/** authenticate */
function authenticate($row) {
    /** $_SESSION is a variable that stills available even after refreshing the page */ 
    $_SESSION['USER'] = $row;
}

/** create_tables(); */
function create_tables()
{
    /** PDO prevents SQL injections */
    $string = "mysql:hostname=".DBHOST.";";
    $con = new PDO($string, DBUSER, DBPASS);

    /** If database don't exist: create a new database */
    $query = "create database if not exists ".DBNAME;
    $stm = $con->prepare($query);
    $stm->execute();

    /** If table exists: use it */
    $query = "use ".DBNAME;
    $stm = $con->prepare($query);
    $stm->execute();

    /** Else: create table USERS */
    $query = "create table if not exists users(

        id int primary key auto_increment,
        user_id int primary key auto_increment,
        category_id int primary key auto_increment,
        title varchar(100) not null,
        content text null,
        image varchar(1024) null,
        date datetime default current_timestamp,
        slug varchar(100) not null,
        
        key user_id (user_id),
        key category_id (category_id),
        key title (title),
        key slug (slug),
        key date (date)
    )";
    $stm = $con->prepare($query);
    $stm->execute();

    /** Else: create table Categories */
    $query = "create table if not exists categories(

    id int primary key auto_increment,
    category varchar(50) not null,
    slug varchar(100) not null,
    disables tinyint default 0,
    
    key slug (slug),
    key category (category)
    )";
    $stm = $con->prepare($query);
    $stm->execute();

    /** Else: create table POSTS */
    $query = "create table if not exists posts(

    id int primary key auto_increment,
    user_id int,
    category_id int,
    title varchar(100) not null,
    content text null,
    image varchar(1024) null,
    date datetime default current_timestamp,
    slug varchar(100) not null,
    
    key user_id (user_id),
    key category_id (category_id),
    key title (title),
    key slug (slug),
    key date (date)
    )";
    $stm = $con->prepare($query);
    $stm->execute();
}