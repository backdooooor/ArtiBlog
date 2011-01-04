 
$(document).ready(
  function()
  {
  }
);
/*
function plus(id_post){
	$.post(
  '/./readyou/index.php/ajax/plus/' + id_post,
  {
    text:"0"
  },
  getData
);	
}
*/
function  getPage(){
 var page =parseInt($("#page").attr("value"));
 
 if(!parseInt(page)){
	setPage(0);
	return 0;
 } else {
	return page;
 }

 return page;
}
function setPage(id){
id=parseInt(id);
if(!parseInt(id)){
	id=0;
}else {
id=id + 10;
id=id - 10;
}

$("#page").attr("value",id);


}
function doContent(){
    
    page=getPage();
     if(!parseInt(page)){
        page=0;
     }else {
       page=page; 
     }
     if(getIdcat()==0){
    	$.post(
     
     
  '/./artiblog/index.php/ajax/newpost/' + page,
  {
    text:"0"
  },
 function(data){
     page=parseInt(getPage) + 10;
     setPage(10);
    $("#content").append(data);
 }
);
     } else {
        getPostCat(getIdcat(),0);
     }
}
function doPost(id){
     $page=getPage();
    	$.post(
  '/./artiblog/index.php/ajax/post/'+ id,
  {
    text:"0"
  },
 function(data){
  $("#nextread").hide();
    $("#content").html(data);
 }
);
}
function doAddComment(id){
    if(parseInt(id)){
    var names=$("#name_form").attr("value");
    var texts=$("#text_form").attr("value");
  
          	$.post(
  '/./artiblog/index.php/ajax/addcomment/'+ id,
  {
    text:texts,
    name:names
  },
 function(data){
  doPost(id);
 }
);
    
    }
    
}
function doListCategory(){
         	$.post(
  '/./artiblog/index.php/ajax/listcategory/',
  {
    text:""
    
  },
 function(data){
 $("#category_dd").html(data);
 }
);
}
function  getIdcat(){
 var page =parseInt($("#id_cat").attr("value"));
 
 if(!parseInt(page)){
	setPage(0);
	return 0;
 } else {
	return page;
 }

 return page;
}
function setId_cat(id){

$("#id_cat").attr("value",id);


}
function getPostCat(id_cat,option){
      
    if(parseInt(option)==1){
        setPage(0);
      
    }
    page=getPage();
    id_cat=parseInt(id_cat);
      if(!parseInt(page)){
        page=0;
     }else {
       page=page; 
     }
    
     
         	$.post(
  '/./artiblog/index.php/ajax/category/' + id_cat + '/' + page,
  {
    text:""
    
  },
 function(data){
    if(parseInt(page)==0){
    $("#content").html(data);
     } else {
           $("#content").append(data); 
     }
    //alert(id_cat);
page=parseInt(getPage) + 10;
     setPage(10);
     setId_cat(id_cat);
     
     
 }
);
}
function doContact(){
          	$.post(
  '/./artiblog/index.php/ajax/contact/',
  {
    text:""
    
  },
 function(data){
 $("#content").html(data);
 $("#nextread").hide();
 }
);
}
function doAbout(){
          	$.post(
  '/./artiblog/index.php/ajax/about/',
  {
    text:""
    
  },
 function(data){
 $("#content").html(data);
 $("#nextread").hide();
 }
);
}