<?php

DEFINE(SERVER, "localhost");
DEFINE(LOGIN, "root");
DEFINE(MDP, "fsociety");
DEFINE(BASE, "exoajax");

 $id=$_POST['var'];
 $connect=mysqli_connect(SERVER, LOGIN, MDP, BASE)or die("problème de connexion au serveur");
 $res=mysqli_query($connect, "SELECT * FROM hero WHERE id=".$id);

 while ($data=mysqli_fetch_assoc($res)) {

   echo "nom : ".$data['nom']."<br/><br/>";
   echo "prénom : ".$data['prenom']."<br/><br/>";
   echo "age : ".$data['age']."<br/><br/>";
   echo "Profession : ".$data['profession']."<br/><br/>";
   echo "Email : ".$data['email']."<br/><br/>";
   echo "Codec : ".$data['telephone']."<br/><br/>";

 }
