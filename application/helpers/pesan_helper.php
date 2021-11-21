<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if ( ! function_exists('info'))
{
    function info($pesan)
    {
        $isi = '<div class="alert" style="background-color: #d9edf7; border-color: #bce8f1; color: #31708f;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$pesan.'</div>';
        return $isi;
    }
}
if ( ! function_exists('danger'))
{
    function danger($pesan)
    {
    	$isi = '<div class="alert" style="background-color: #f2dede; border-color: #ebccd1; color: #a94442;">
			<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>'.$pesan.'</div>';
        return $isi;
    }
}
if ( ! function_exists('sukses'))
{
    function sukses($pesan)
    {
        $isi = '<div class="alert" style="background-color: #dff0d8; border-color: #d6e9c6; color: #3c763d;">
            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>'.$pesan.'</div>';
        return $isi;
    }
}
if ( ! function_exists('warning'))
{
    function warning($pesan)
    {
        $isi = '<div class="alert" style="background-color: #fcf8e3; border-color: #faebcc; color: #8a6d3b;">
            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>'.$pesan.'</div>';
        return $isi;
    }
}