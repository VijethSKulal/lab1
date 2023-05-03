<script>
var a = prompt("enter the query"),b=parseInt(a),z=0;
if(b)
{
while(b>0)
var r=b%10, z= z*10+r, b = Math.floor(b/10);
document.write("entered query: "+a+"<br> given number in reverse order:"+z);
}
else{
a = a.search(/[aeiouAEIOU]/);
document.write("the first occurance of the vowel is at : "+ (a+1));
}
</script>
