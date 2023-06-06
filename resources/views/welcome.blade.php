<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin-Dashboard</title>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.canvasjs.com/ga/canvasjs.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-storage.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />





        <!-- Styles -->
        <style>
            
            .user-table {
        /* width: 100%; */
        border-collapse: collapse;
        }

        .user-table th,
        .user-table td {
        padding: 8px;
        border: 1px solid #ddd;
        }

        .user-table th {
        background-color: #f2f2f2;
        }

        .btn {
        display: inline-block;
        padding: 8px 16px;
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        .btn-view {
        background-color: #2196f3;
        }

        .btn-edit {
        background-color: #ffc107;
        }

        .btn-delete {
        background-color: #f44336;
        }

        .btn-create {
        display: block;
        margin-top: 16px;
        background-color: #4caf50;
        }

        .btn:hover {
        opacity: 0.8;
        }

        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 5px;
        }

        button {
            padding: 10px 20px;
            background: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        </style>
    </head>
    <body>


            <!-- Daily Users Registration Section -->
        <section>
            <div style="width:100%;display:flex; justify-content:center; align-items:center; flex-direction:column">
                <div style="height: 300px; width: 60%; margin:5% 0%; display:flex; justify-content:center; align-items:center; flex-direction:column">
                    <h2>Dialy registered users graph</h2>
                    <canvas  id="userRegistrationGraph">
                    </canvas>
                </div>
            </div>
        </section>


            <!-- Users Accourding to Country Graph Section -->
        <section>
        <div style=" width:100%;display:flex; justify-content:center; align-items:center; flex-direction:column">
            <h2>Country Wise Graph Showing Users per Country</h2>
            <div id="chartContainer" style="height: 300px; width: 60%; margin-top:1%">
            </div>
        </div>
        </section>


            <!-- Crud Operations Yajra Table -->
        <section style="display:flex; justify-content:center; align-items:center; flex-direction:column;">
            <h1>Crud Operations</h1>

                <!-- Yajra Table Structure -->
    <div class="container">
        <div class="row mb-3">
                <div class="col-md-4">
                    <label for="date_filter">Date Filter:</label>
                    <input type="date" id="startdatefilter" class="form-control" name="startdatefilter">
                </div>
                <div class="col-md-4">
                    <label for="date_filter">Date Filter:</label>
                    <input type="date" id="enddatefilter" class="form-control" name="enddatefilter">
                </div>
                <div class="col-md-4">
                    <label for="country_filter">Country Filter:</label>
                    <input type="text" id="countryfilter" class="form-control" name="countryfilter">
                </div>
                <div class="col-md-4">
                    <button id="filterbtn" class="btn btn-primary mt-4">Apply Filters</button>
                </div>
        </div>

        
        <button onclick="exportToExcel()">Download Excel</button>

            
        </div>
            <table id="user-table" class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Country</th>
                        <th scope="col">Action</th>
                        <!-- <th scope="col">Profile</th> -->
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

                <!-- Create New User Button -->
            <button  class="btn btn-create"  id="createUserBtn">Create New User</button>







            <!--//////////////// Bootstrap Modal Popups to perform Crud Operations //////////-->



            <!-- PopUp Modal to create a new User  -->
            <div class="modal" tabindex="-1" id="createUserPopup">
                <div class="modal-dialog">
                    <div class="modal-content" style="align-items: center;">
                        <h2>User Form</h2>
                    <form id="createUserForm"  enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="createPopupName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="createPopupEmail" name="email" required></input>
                        </div>
                        <div class="form-group">
                            <label for="phone">Password:</label>
                            <input id="createPopupPassword" name="password" required></input>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input id="createPopupPhone" name="phone" required></input>
                        </div>
                        <div class="form-group">
                            <select name="country" id="createPopupCountry">
                            <option disable selected>Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Profile:</label>
                            <input type="file" name="profile_image" id="createPopupImage">
                            <input type="hidden" name="image_url" id="imageURLInput">
                        </div>
                        <input type="submit"   class="button" value="submit">
                        <!-- onclick="uploadAndSubmit()" -->
                    </form>
                    </div>
                </div>
            </div>


                <!-- PopUp Modal to Update a  User's Record  -->
            <div class="modal" tabindex="-1" id="editUserPopup">
                <div class="modal-dialog">
                    <div class="modal-content" style="align-items: center;">
                        <h2>User Form</h2>
                    <form >
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="editPopupName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="editPopupEmail" name="email" required></input>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input id="editPopupPhone" name="phone" required></input>
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input id="editPopupCountry" name="country" required></input>
                        </div>
                        
                        <button type="button" id="saveChangesPopup">Save</button>
                    </form>
                    </div>
                </div>
            </div>


                <!-- PopUp Modal to View  a  User's Data  -->
            <div class="modal" tabindex="-1" id="viewUserPopup">
                <div class="modal-dialog">
                    <div class="modal-content" style="align-items: center;">
                        <h2>User Form</h2>
                    <form >
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="viewPopupName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="viewPopupEmail" name="email" required></input>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input id="viewPopupPhone" name="phone" required></input>
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input id="viewPopupCountry" name="country" required></input>
                        </div>
                
                        <button type="button" id="viewChangesPopup">Done</button>
                    </form>
                    </div>
                </div>
            </div>

        </section>



                                <!-- Script Starts from here  -->




        <!-- /////////////// Daily Users Registration Chart  //////////////////-->
            <script>
                var userRegistrations = @json($userRegistrations);
                var dates = Object.keys(userRegistrations);
                var registrationCounts = Object.values(userRegistrations);

                var ctx = document.getElementById('userRegistrationGraph').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: dates,
                        datasets: [{
                            label: 'Daily User Registrations',
                            data: registrationCounts,
                            borderColor: 'rgb(75, 192, 192)',
                            tension: 0.1
                        }]
                    }
                });
            </script>







             <!-- /////////////// Users according to Countries Graph on next View //////////-->
            <script>
                window.addEventListener('DOMContentLoaded', (event) => {
                    var data = @json($data);

                    var options = {
                        data: [{
                            type: "column",
                            dataPoints: data,
                            click: function(e) {
                                var country = e.dataPoint.label;
                                window.location.href = '/countrywisedetail?country=' + country;
                            }
                        }],
                        columns: [
                            { data: 'name', name: 'name' },
                            { data: 'population', name: 'population' },
                            { data: 'actions', name: 'actions', orderable: false, searchable: false }
                        ],
                        columnDefs: [{
                            targets: 'actions',
                            render: function (data, type, row) {
                                return `
                                    <button class="btn btn-sm btn-info">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                `;
                            }
                        }]
                    };

                    var chart = new CanvasJS.Chart("chartContainer", options);
                    chart.render();
                });


            </script>








                <!-- //////////// Crud Operations Yajra Table  ////////////////////-->



            <script>
                var table;
                var userId =0;

                    // Initialize Yajra DataTable
                $(document).ready(function () {
                     table= $('#user-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('yajrainitialize') }}",
                        columns: [
                            {data: 'name', name: 'name'},
                            {data: 'email', name: 'email'},
                            {data: 'phone', name: 'phone'},
                            {data: 'country.name', name: 'country.name'},
                            // {data: 'image', name: 'image'},
                            {data: 'action', name: 'action', orderable: false, searchable: false}
                        ]
                    });
                });




                    // Handle Delete Operation
                function deleteClicked(uId) {
                    var csrfToken = "{{ csrf_token() }}";
                    $.ajax({
                        url: '/deletecrud/' + uId,
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                                table.destroy();
                                    // Reinitialize the DataTable with the updated data
                                    table = $('#user-table').DataTable({
                                        data: response.data,
                                        columns: [
                                            {data: 'name', name: 'name'},
                                            {data: 'email', name: 'email'},
                                            {data: 'phone', name: 'phone'},
                                            {data: 'country_id', name: 'country_id'},
                                            // {data: 'image', name: 'image'},
                                            {data: 'action', name: 'action', orderable: false, searchable: false}
                                        ]
                                    });
                        },
                        error: function(xhr, status, error) {
                            // Handle error response
                            console.log(error);
                        }
                    });
                }


                    // Show PopUp form for new user  
                $('#createUserBtn').on('click', function () {
                    $('#createUserPopup').show();
                });



                    // Handle Create New User Operation
                $(document).ready(function() {
                $('#createUserForm').submit(function(event) {
                    event.preventDefault(); // Prevent the default form submission
                    
                    var formData = new FormData(this); // Create a new FormData object with the form data
                    console.log(formData);
                    $.ajax({
                    type: 'POST',
                    url: '/users',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {

                        table.destroy();
                                // Reinitialize the DataTable 
                                table = $('#user-table').DataTable({
                                    data: response.data,
                                    columns: [
                                        {data: 'name', name: 'name'},
                                        {data: 'email', name: 'email'},
                                        {data: 'phone', name: 'phone'},
                                        {data: 'country_id', name: 'country_id'},
                                        // {data: 'image', name: 'image'},
                                        {data: 'action', name: 'action', orderable: false, searchable: false}
                                    ]
                                });
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                    });
                        $('#createPopupName').val('');
                        $('#createPopupEmail').val('');
                        $('#createPopupPhone').val('');
                        $('#createPopupCountry').val('');
                        $('#createPopupPassword').val('');
                        $('#imageURLInput').val('');
                        $("#createUserPopup").hide();
                    });
                });




                    // Image Upload to Firebase
                $(document).ready(function() {
                    $('#createPopupImage').change(function() {
                            console.log("now in upload to firebase function");
                            var image = document.getElementById("createPopupImage").files[0];
                            var img = image.name;

                            // Initialize Firebase app
                            const firebaseConfig = {
                            apiKey: "AIzaSyCsJALsE6AEPvhLKo1HUYSPyzyo-0yQ6oU",
                            authDomain: "t-1-userauth.firebaseapp.com",
                            projectId: "t-1-userauth",
                            storageBucket: "t-1-userauth.appspot.com",
                            appId: "1:58239891333:web:f13a680d6254e91296f6ec",
                            };

                            firebase.initializeApp(firebaseConfig);
                             var imageUploadPath = firebase.storage().ref('images/' + img);
                             var imageUpload = imageUploadPath.put(image);
                            
                            imageUpload.then((path)=>{
                                return path.ref.getDownloadURL();
                                console.log("got url after uploading ");
                            }).then((url)=>{
                                imageUrl = url;
                                document.getElementById('imageURLInput').value = imageUrl;
                                console.log(url);
                                    
                            }).catch((error)=>{
                                console.log(error);
                        });
                    });
                });




                    // Will send updated Data to controller 
                $('#saveChangesPopup').on('click', function() {
                    // Get the updated values from the input fields in the popup
                    var newName = $('#editPopupName').val();
                    var newEmail = $('#editPopupEmail').val();
                    var newPhone = $('#editPopupPhone').val();
                    var newPassword = $('#editPopupPassword').val();
                    var newCountry = $('#editPopupCountry').val();
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    
                    $.ajax({
                        url: '/updateuser/' + userId,
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        data: {
                            name: newName,
                            email: newEmail,
                            password: newPassword,
                            phone: newPhone,
                            country: newCountry
                        },
                        success: function(response) {
                            // Re-Initialize Table if Response == Success
                                    table.destroy();
                                        table = $('#user-table').DataTable({
                                            data: response.data,
                                            columns: [
                                                {data: 'name', name: 'name'},
                                                {data: 'email', name: 'email'},
                                                {data: 'phone', name: 'phone'},
                                                {data: 'country_id', name: 'country_id'},
                                                // {data: 'image', name: 'image'},
                                                {data: 'action', name: 'action', orderable: false, searchable: false}
                                            ]
                                        });
                                $('#editUserPopup').hide();
                                // $('#createPopupName').val('');
                                // $('#createPopupEmail').val('');
                                // $('#createPopupPhone').val('');
                                // $('#createPopupCountry').val('');
                        },
                        error: function(xhr, status, error) {
                            // Handle the error response
                            console.log('Error saving changes:', error);
                        }
                    });
                });




                // Will Populate Data in Form (input fields) to Edit
                function editClicked(uid){
                         userId = uid;
                        
                        $.ajax({
                            url: '/fetchuserdata/' + uid, 
                            type: 'GET',
                            success: function(response) {
                                
                                var name = response.name;
                                var email = response.email;
                                var phone = response.phone;
                                var country = response.country;
                                
                                $('#editPopupName').val(name);
                                $('#editPopupEmail').val(email);
                                $('#editPopupPhone').val(phone);
                                $('#editPopupCountry').val(country);

                                // Open the popup
                                $('#editUserPopup').show();
                            },
                            error: function(xhr, status, error) {
                                // Handle error response
                                console.log(error);
                            }
                        });
                    }





                    //Will show popup
                    $("#viewChangesPopup").on('click', ()=>{
                        $('#viewUserPopup').hide();
                    });


                    //Will fetch and Populate Data in Form to View
                function viewClicked(uid){
                        userId = uid;
                        console.log(uid);
                            // Perform AJAX request to fetch user data
                            $.ajax({
                                url: '/fetchuserdata/' + userId, 
                                type: 'GET',
                                success: function(response) {

                                    var name = response.name;
                                    var email = response.email;
                                    var phone = response.phone;
                                    var country = response.country;
                              
                                    $('#viewPopupName').val(name);
                                    $('#viewPopupEmail').val(email);
                                    $('#viewPopupPhone').val(phone);
                                    $('#viewPopupCountry').val(country);

                                    // Open the popup
                                    $('#viewUserPopup').show();
                                },
                                error: function(xhr, status, error) {
                                    console.log(error);
                                }
                            });
                        }






                    // Appply filters on Yajra Table
                        $('#filterbtn').on('click', function () {
                    
                            // table.clear();
                            $.ajax({
                                url: '/applyfilters',
                                type: 'GET',
                                data: {
                                    country: $('#countryfilter').val(),
                                    startdate: $('#startdatefilter').val(),
                                    enddate: $('#enddatefilter').val()
                                },
                                success: function (response){
                                    table.destroy();
                                        table = $('#user-table').DataTable({
                                            data: response.data,
                                            columns: [
                                                {data: 'name', name: 'name'},
                                                {data: 'email', name: 'email'},
                                                {data: 'phone', name: 'phone'},
                                                {data: 'country_id', name: 'country_id'},
                                                // {data: 'image', name: 'image'},
                                                {data: 'action', name: 'action', orderable: false, searchable: false}
                                            ]
                                        });
                                },
                                error: function(xhr, status,error){
                                    console.log(error);
                                }
                            });
                        });






                  // <!-- Download Excel file of table script-->
                    function exportToExcel(){
                        <a href="/export"></a>

                    }

            </script>
        





       
           
        

          
            




    </body>
    
     
</html>
