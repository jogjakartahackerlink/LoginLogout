<?php
session_start();
$auth_user = "admin";
$auth_pass = "admin123";

function alert($i){
	return "<script>alert('".$i."');</script>";
}

function redirect($i){
	return "<script>window.location='".$i."';</script>";
}

function login($username, $password){
	global $auth_user, $auth_pass;
	if($username == $auth_user && $password == $auth_pass){
		return True;
	}else{
		return False;
	}
}