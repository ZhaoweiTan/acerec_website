//(function(){

 $(function() {


     $.widget( "custom.catcomplete", $.ui.autocomplete, {
         _create: function() {
             this._super();
             this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
         },
         _renderMenu: function( ul, items ) {
             var that = this,
                 currentCategory = "";
             $.each( items, function( index, item ) {
                 var li;
                 if ( item.category != currentCategory ) {
                     ul.append( "<li class='ui-autocomplete-category'>  " + item.category + "</li>" );
                     currentCategory = item.category;
                 }
                 li = that._renderItemData( ul, item );

                 if ( item.category ) {
                     console.log(item.category + " : " + item.label)
                     li.attr( "aria-label",  item.label );
                 }
             });
         }
     });

  var projects =[
      { label: "gy",title:"gy", category: "" }
  ];

   $( "#query1" ).catcomplete({
          minLength:2,
          source: function( request, response ) {
              var host1 = document.location.href;
              console.log(host1)
              var ajaxurl;
              if(host1.match("index.php") == null){
                  ajaxurl = "index.php/search";
              }else{
                  ajaxurl = "search";
              }
              console.log(ajaxurl);
              console.log(request.term)
                $.ajax({
                    url: ajaxurl,
                    data: {
                        q: request.term
                    },
                    success: function (data) {
                        var sources = data;
                        console.log(sources)
                        sources = sources.split(";");
                        projects.splice(0, projects.length)
                        for (var i = 0; i < sources.length - 1; i++) {
                            eval("var result = " + sources[i]);
                            projects.push(result);
                        }
                        console.log(projects);
                        response(projects);
                    }
              });
          },

	   //scrollHeight:
	   // 100,
       //scroll: true,
	   //max:5, 
       select: function( event, ui ) {
           $( "#query1" ).val( ui.item.label );
           $("#submit").click();
           return false;
       }

   })
    //   .autocomplete( "instance" )._renderItem = function( ul, item ) {
       //console.log(item);
    //   return $( "<li>" )
    //       .append( "<a><strong>" + item.author + "</strong><br><small>" + item.title + "</small></a>" )
   //        .appendTo( ul );
   //     };


 });
$(function() {

});

//})