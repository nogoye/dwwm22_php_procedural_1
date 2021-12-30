<?php 

require("models/staffModel.php");

require("librairies/render.php");

function allContact()
{
    $crew = findAllStaff();

    render("contact",[
        'crew' => $crew
    ]);
}

function oneContact(int $id)
{
    $staff = findOneStaff($id);

    render("staff",[
        "staff" => $staff
    ]);
}


?>