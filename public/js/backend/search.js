
$(function(){
    $('#dataTable').on('keyup','#search',function(){
     var query=$(this).val();
     if(query){
         $.get("{{URL::to('/admin/search/product')}}/"+query,function(data){
             $('#newData').empty().append(data);
            
         });
     }
     else{
         $.get("{{URL::to('/admin/search/product')}}/"+'emptyquery',function(data){
             $('#newData').empty().append(data);

         });
     }
    });
 });

