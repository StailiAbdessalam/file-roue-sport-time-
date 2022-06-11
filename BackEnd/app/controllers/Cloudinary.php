<?php

class Cloudinary extends Controller
{
    public function getSignature()
    {
       return $this->json(cloudinarySign(["folder" => "SporTime"]));
    }
}
