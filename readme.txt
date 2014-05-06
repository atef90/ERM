GIPel : Gestionnaire d'Informations Personnelles en ligne---------------------------------------------------------
Url     : http://codes-sources.commentcamarche.net/source/100199-gipel-gestionnaire-d-informations-personnelles-en-ligneAuteur  : ceckeDate    : 31/10/2013
Licence :
=========

Ce document intitulé « GIPel : Gestionnaire d'Informations Personnelles en ligne » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

Cette application vous permet d'acc&eacute;der, de g&eacute;rer et de partager t
outes vos pr&eacute;cieuses informations en toute s&eacute;curit&eacute;, &agrav
e; tout moment et en tout lieu. Elle utilise le fameux framework CodeIgniter 2.1
.4.
<br />Elle contient un carnet d'adresses, un bloc-notes, un r&eacute;pertoi
re pour vos documents et un gestionnaire d'identifiants et mots de passe pour vo
s sites web
<br />
<br />Un moteur de recherche vous permet de retrouver rapid
ement vos enregistrements par leurs &laquo; mots cl&eacute; &raquo;, en seulemen
t 2 clics. Ce moteur est toujours accessible dans le bandeau sup&eacute;rieur.

<br />
<br />L'acc&egrave;s aux informations contenues dans GIPel n&eacute;cess
ite une authentification stricte. La s&eacute;curit&eacute; n'a pas &eacute;t&ea
cute; n&eacute;glig&eacute;e. Les sessions sont g&eacute;r&eacute;es par la clas
se &laquo; session &raquo; de codeigniter et enregistr&eacute;es dans la base de
 donn&eacute;es. Leur dur&eacute;e est limit&eacute;e. Les informations &laquo; 
sensibles &raquo; sont invisibles dans le cookie de session.
<br />
<br />GIPe
l est capable de g&eacute;rer 3 types d'utilisateurs : ReadOnly (Lecture seule),
 ReadWrite (Lecture et &eacute;criture), SuperAdmin (administrateur unique du si
te).
<br />
<br />ReadOnly peut :
<br />- acc&eacute;der aux sections : enreg
istrements, divers
<br />- afficher les enregistrements &laquo; communautaires 
&raquo;
<br />ReadWrite peut, en plus :
<br />- afficher les enregistrements &
laquo; personnels &raquo; lui appartenant
<br />- ajouter des enregistrements &
laquo; personnels &raquo; ou &laquo; communautaires &raquo;
<br />- &eacute;dit
er et supprimer les enregistrements &laquo; personnels &raquo; lui appartenant

<br />SuperAdmin peut, en plus :
<br />- acc&eacute;der aux sections : administ
ration et gestion bancaire
<br />- afficher tous les enregistrements &laquo; pe
rsonnels &raquo;
<br />- &eacute;diter et supprimer tous les enregistrements &l
aquo; personnels &raquo; ou &laquo; communautaires &raquo;
<br />- g&eacute;rer
 les groupes d'enregistrements
<br />Les enregistrements se d&eacute;clinent en
 2 niveaux de confidentialit&eacute; :
<br />- communautaire : visible par tous
 les utilisateurs une fois qu'ils sont authentifi&eacute;s
<br />- personnel : 
visible uniquement par le propri&eacute;taire (et l'administrateur)
<br />
<br
 />Des efforts ont &eacute;t&eacute; faits, notamment au niveau de la navigation
, pour que GIPel soit utilisable facilement &agrave; partir de t&eacute;l&eacute
;phones portables, m&ecirc;me de bas de gamme. Posez le doigt sur un num&eacute;
ro de t&eacute;l&eacute;phone que vous avez enregistr&eacute; dans GIPel : votre
 portable composera automatiquement le num&eacute;ro. Pour les sites web, copiez
 et collez facilement vos mots de passe... Et n'oubliez pas de mettre un mot de 
passe de d&eacute;verrouillage sur votre i-phone !
<br />
<br />Enfin, une pro
c&eacute;dure d'installation d&eacute;taill&eacute;e ainsi qu'un script d&eacute
;di&eacute; rendent l'installation tr&egrave;s facile, m&ecirc;me si vous n'&eci
rc;tes pas un expert de l'informatique. Il vous suffit d'un serveur pour h&eacut
e;berger l'application.
<br />
<br />Proc&eacute;dure d'installation : <a href
='http://www.ceck.org/applications-web/gipel/installer-gipel/' rel='nofollow' ta
rget='_blank'>http://www.ceck.org/applications-web/gipel/installer-gipel/</a>
<
br />
<br />Url de la d&eacute;mo : <a href='http://webapps.ceck.org/gipel/inde
x.php/' rel='nofollow' target='_blank'>http://webapps.ceck.org/gipel/index.php/<
/a>
<br />
<br />Url du projet : <a href='http://www.ceck.org/applications-web
/gipel/' rel='nofollow' target='_blank'>http://www.ceck.org/applications-web/gip
el/</a>
