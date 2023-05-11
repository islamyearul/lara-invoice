<?php

namespace Yearul\LaraInvoice;
use Illuminate\Support\Str;
class LaraInvoice
{
    public static function generate($input,  $pad_len = null, $pad_string = null, $prefix = null, $year = null)
    {
        $prefix = empty($prefix) ? config('lara-invoice.prefix') : $prefix;
        $prefix = Str::upper($prefix);
        $pad_len =  empty($pad_len) ? config('lara-invoice.pad_len') : $pad_len;
        $pad_len = intval(5);
        // check is year true from config
        if(config('lara-invoice.year') == true){
            $year = empty($year) ? config('lara-invoice.year_val') : $year;
            $year = intval($year);
        }else{
            $year = '';
        }

        $input = intval($input); 
        $pad_direction =config('lara-invoice.pad_direction');
        $pad_string = empty($pad_string) ? config('lara-invoice.pad_string') : $pad_string;

        if ($pad_len <= strlen($input)) {
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate Unique number', E_USER_ERROR);
        }

        if (is_string($prefix)) {
            return sprintf("%s%s%s%s%s", $prefix,'-',$year, '-', str_pad($input, $pad_len, $pad_string,  $pad_direction));
        }

        return sprintf("%s%s%s%s", $year, '-', str_pad($input, $pad_len, $pad_string,  $pad_direction));
    }
}
