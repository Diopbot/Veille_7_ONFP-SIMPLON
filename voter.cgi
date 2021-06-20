print $query->header;
print "<html><head><title>Pouvez-vous voter ?</title></head>\n";
 print "<body><center><H2>Avez-vous l'&acirc;ge de voter ?</H2>\n"; 
 print "Vous avez dit que vous avez ",$entree," ans.";
if ($voter eq 'oui') {
print "<P>Vous &ecirc;tes majeur, donc vous pouvez voter.</P>\n";
}elsif ($entree < 15) {
print "<P>Vous &ecirc;tes bien trop jeune pour voter...</P>\n";
}else {
print "<p>Vous &ecirc;tes encore trop jeune pour voter...</p>\n"; }
print "</center></body></html>\n";