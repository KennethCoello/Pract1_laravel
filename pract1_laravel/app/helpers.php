<?php

function setActive(string $ruta): string
{
return request()->routeIs($ruta) ? 'text-red-500' : '';
}