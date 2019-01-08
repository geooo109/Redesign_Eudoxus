$(document).ready(function(){

  // Adding a new row
  $(document).on('click','#add',function(){
    var title        = $('#title').val();
    var author       = $('#author').val();
    var publisher    = $('#publisher').val();
    var course       = $('#course').val();
    var professor    = $('#professor').val();
    var semester     = $('#semester').val();
    var eudoxus_code = $('#eudoxus_code').val();

    if(title == ""){
      $("#errorTitle").html("Εισάγετε Τίτλο");
    }else if (author == "") {
      $("#errorAuthor").html("Εισάγετε Συγγραφέα");
    }else if (publisher == "") {
      $("#errorPublisher").html("Εισάγετε Εκδοτικό Οίκο");
    }else if (course == "") {
      $("#errorCourse").html("Εισάγετε Μάθημα");
    }else if (professor == "") {
      $("#errorProfessor").html("Εισάγετε Καθηγητή");
    }else if (semester == "") {
      $("#errorSemester").html("Εισάγετε Αριθμό Εξαμήνου");
    }else if (eudoxus_code == "") {
      $("#errorEudCode").html("Εισάγετε Κωδικό Ευδόξου");
    }else {
      $.ajax({
        url :"insert.php",
        type:"post",
        data:{title:title,author:author,publisher:publisher,course:course,professor:professor,semester:semester,eudoxus_code:eudoxus_code},
        success:function(data){
          alert("Επιτυχής Προσθήκη");
          $("#addModal").modal('hide');
          var newBookNum = $('#myTable tr').length;
          var newRow =
          "<tr>"+
            "<th class=\"align-middle\" scope=\"row\">" + newBookNum + "</th>"+
            "<td class=\"align-middle\">" + title + "</td>"+
            "<td class=\"align-middle\">" + author + "</td>"+
            "<td class=\"align-middle\">" + publisher + "</td>"+
            "<td class=\"align-middle\">" + course + "</td>"+
            "<td class=\"align-middle\">" + professor + "</td>"+
            "<td class=\"align-middle\">" + semester + "</td>"+
            "<td class=\"align-middle\">" + eudoxus_code + "</td>"+
            "<td>"+
              "<a data-toggle=\"modal\" data-target=\"#editModal\"><i class=\"far fa-edit\"></i></a>"+
              "<a data-toggle=\"modal\" data-target=\"#deleteModal\"><i class=\"far fa-trash-alt\"></i></a>"+
            "</td>"+
          "</tr>";
          $("#myTable tbody").append(newRow);
          $("#addForm")[0].reset();
          }
      });
    }
  });

  // Updating an existing row
  // First we need to fetch the data of the row and
  // fill the editModal with them.
  $(document).on('click','.editData',function(){
    // id of the row we're gonna edit
    var edit_id = $(this).attr('id');
    $.ajax({
      url :"fetchDataToEdit.php",
      type:"post",
      data:{edit_id:edit_id},
      success:function(data){
        // Construct the body of the modal and show it
        $("#editModalBody").html(data);
        $("#editModal").modal('show');
        }
    });
  });
  $(document).on('click','#update',function(){
    $.ajax({
      url :"update.php",
      type:"post",
      data:$("#editForm").serialize(),
      success:function(data){
        alert("Επιτυχής Ενημέρωση");
        $("#editModal").modal('hide');
        location.reload();
        }
    });
  });

  //Deleting a row
  // First we need to fetch the data of the row and
  // fill the deleteModal with them.
  $(document).on('click','.deleteData',function(){
    // id of the row we're gonna edit
    var del_id = $(this).attr('id');
    $.ajax({
      url :"fetchDataToDelete.php",
      type:"post",
      data:{del_id:del_id},
      success:function(data){
        // Construct the body of the modal and show it
        $("#deleteModalBody").html(data);
        $("#delModal").modal('show');
        }
    });
  });
  $(document).on('click','#delete',function(){
    $.ajax({
      url :"delete.php",
      type:"post",
      data:$("#deleteForm").serialize(),
      success:function(data){
        alert("Επιτυχής Διαγραφή");
        $("#deleteModal").modal('hide');
        location.reload();
        }
    });
  });

});
