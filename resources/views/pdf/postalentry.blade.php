<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body{
            font-family: 'open sans', sans-serif;
            letter-spacing: 0.8px;
        }

            /* =========== userInfoAtTop section style  ===================*/
        #parentDiv{
            max-width: 900px;
            margin: 0 auto;
            padding-right: 2%;
            padding-left: 2%;
            margin-top: -45px;
        }
        
        #userInfoAtTop{
            width: 100%;
            /* margin-left: 10%; */
            /* line-height: 1; */
            letter-spacing: 0.2px;
        }

        #userInfoEmptyChild {
            width: 10%;
            text-align: center;
        }

        #userInfoFirstChild {
            width: 80%;
            text-align: center;
        }

        #userInfoSecondChild {
            width: 10%;
            text-align: center;
        }

        #userInfoSecondChild p{
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 1.2px;
        }

        #userInfoAtTop tr td p {
           font-size: 10px;
            /* padding-left: 2%; */
        }

        /* #userInfoSecondChild p{
            margin-left: 30px;
        } */

        /* =========== #headerTable section style  ===================*/
        #headerTable{
            width: 100%;
            margin-top: -10px;
        }

        #headerTableFirst{
            width: 33%;
            
        }

        .postalEntry{
            font-size: 18px;
            letter-spacing: 2px;
            font-family: 'open sans', sans-serif !important;
            
        }

        .postalEntryForm{
            margin-top: 22px;
            font-size: 11px;
            margin-left: 17px;
        }

        #headerTableFirst hr{
           height: 0.4px;
           background-color: black;
           margin-left: 0;
           width: 65%;
        }

        #headerTableSecond{
            width: 33%;
            text-align: center;
        }

        #zimoo{
            width: 180px;
            
        }
       
         #civica{
            margin-top: 10px;
            width: 180px;
        } 

        #headerTableSecond img{
            margin-bottom: 5px;
        }

        #headerTableThird{
            width: 33%;
        }

        #headerTableThird p{
            text-align: center;
            font-size: 11px;
            line-height: 1;
            font-family: 'open sans', sans-serif !important;
            /* font-weight: bold; */
        }


        /* =========== printInstruction section style  ===================*/

        #printInstruction {
            width: 100%;
            /* margin-top: -5px; */
        }

        #printInstruction tr td{
            text-align: center;
            line-height: 0.6;
        }
        .printP{
            font-size: 12px;
        }

        .printPBold{
            font-size: 12px;
            font-family: 'open sans', sans-serif !important;
            font-weight: bold;
        }

        /* =========== uniqueNoInputParent section style  ===================*/
        #uniqueNoInputParent{
            margin: auto;
            width: 90%;
            margin-top: -10px;
        }

        #uniqueIdP{
            text-align: center;
            font-size: 8px;
            letter-spacing: 0.4px;
            
        }

        #uniqueIdInput {
            
            margin-left: 28%;
            width: 280px;
            height: 35px;
            border-radius: 8px;
            border: 2px solid black;
        }



        /* =========== #inputFieldParent section style  ===================*/
        #inputFieldParent {
            width: 93%;
            margin: auto;
            margin-top: -10px;
        }

        #inputFieldParent input{
            width: 280px;
            height: 35px;
            border-radius: 8px;
            border: 2px solid black;
            display: block;
            margin-top: 3px;
        }

        #inputFieldParent tr td{
            padding-top: 10px;
        }

        #inputFieldParent label{
            font-size: 8px;
            font-family: 'open sans', sans-serif !important;
            font-weight: bold;
        }

        .secondChildInput{
            padding-left: 80px;
        }

        /* =========== userInfoAtTop section style  ===================*/
        #markInstructionParent{
            /* margin-top: -2px; */
            width: 100%;
            
        }

        #markInstructionParent tr td{
            text-align: center;
        }
        #markInstruction{
            font-size: 10px;
        }

        /* =========== #postalAddressesParent section style  ===================*/
        .postalAddressesParent{
            width: 100%;
            /* margin-top: -10px; */
            
        }

        .postalP{
            font-size: 8px;
            margin-bottom: 25px;
            
            font-weight: bold;
        }


        .addresses p{
            font-size: 11px;
            line-height: 0.4;
            margin-bottom: 0px;
            /* font-weight: bold; */
        }

        .ukpostText{
            font-size: 14px;
            display: inline;
        }

        .vertical-hr {
        width: 1.3px; 
        height: 150px; 
        background-color: black; 
        /* margin-left: 20px; */
        }

        

        #postalAddressesFirst{
            width: 49%;
        }
        #postalAddressesSecond{
            width: 49%;
            padding-left: 20px;
            padding-top: 13px;
        }

        #check{
            margin-left: 128px;
            transform: scale(1.7);
            padding-top: 9px;
        }

        
        /* =========== #remindersNote section style  ===================*/
        
        #remindersNote {
            width: 90%;
            margin: 0 auto;
            margin-top: 10px;
            
        }

        #remindersNote p{
            text-align: center;
            font-size: 7.5px;
            font-family: 'open sans', sans-serif !important;
            font-weight: bold;
            /* line-height: 1; */
        }

        #companyNo{
            text-align: center;
            font-size: 10px;
        }

        /* =========== #footerImages section style  ===================*/

        #footerImages{
            width: 100%;
            margin-top: -5px;
        }

        #footerImages tr td{
            width: 33%;
        }

        #start{
            vertical-align: bottom;
        }

        #center{
            text-align: center;
            vertical-align: bottom;
        }

        #end{
            text-align: end;
            vertical-align: bottom;
        }

        .qr{
            margin-left: 80px;
            height: 60px;
        }
        
        .poweredby{
            height: 50px;
        }

        .zimooloogo{
            height: 40px;
        }
        

    </style>
</head>
<body>

    <div id="parentDiv">
        <table id="parentTable">
            <tr>
                <td>
                    <table id="userInfoAtTop">
                        <tr>
                            <td id="userInfoEmptyChild">

                            </td>
                            <td id="userInfoFirstChild">
                                <p>A POSTAL ENTRY MUST BE ACCOMPAINED WITH AN ACTIVE ACCOUNT, PLEASE ENSURE YOU CREATED AN ACCOUNT. ALL DETAILS ON THIS ENTRY FORM MUST CORRESPOND TO THE DETAILS ON ACCOUNT  </p>
                            </td>
                            <td id="userInfoSecondChild">
                                <p>V.7861</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <table id="headerTable">
                    <tr>
                        <td id="headerTableFirst">
                            <p class="postalEntry">POSTAL ENTRY</p>
                            <hr >
                            <p class="postalEntryForm"> POSTAL ENTRY FORM</p>
                        </td>
                        <td id="headerTableSecond">
                            <img id="zimoo" src="{{ public_path('/images/zimo.png') }}" alt="image">
                            <img id="civica" src="{{ public_path('/images/civica2.png') }}" alt="image"> 
                        </td>
                        <td id="headerTableThird">
                            <p>INFORMATION PROVIDED MUST WATCH</p>
                            <p>YOUR LEGAL IDENTIFICATION</p>
                        </td>
                    </tr>
                </table>
            </tr>
            <tr>
                <table id="printInstruction">
                    <tr>
                        <td>
                            <p class="printP">PRINT THIS FORM AND COMPLETE IN <b>CAPITAL LETTERS</b>  USE <b>BLACK INK</b> </p>
                            <p class="printPBold">MAXIMUM ONE ENTRY PER ENVELOPE/POSTCARD</p>
                        </td>
                    </tr>
                </table>
            </tr>
            <tr>
                <table id="uniqueNoInputParent">
                    <tr>
                        <p id="uniqueIdP"> <b> UNIQUE LISTING ID (#ZM: 030*******) 10 DIGITS </b></p>
                        <input id="uniqueIdInput" type="text" placeholder="#zm CAN BE FOUND ON THE LISTING PAGE">
                    </tr>
                </table>
            </tr>
            <tr>
                <table id="inputFieldParent">
                    <tr>
                        <td>
                            <label for="">FIRST NAME</label>
                            <input type="text" >
                        </td>
                        <td class="secondChildInput">
                            <label for="">ADDRESS 1</label>
                            <input type="text" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">LAST NAME (INCLUDING MIDDLE NAME)</label>
                            <input type="text" >
                        </td>
                        <td class="secondChildInput">
                            <label for="">ADDRESS 2</label>
                            <input type="text" placeholder="hello">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">PHONE NUMBER (INCLUDING COUNTRY CODE)</label>
                            <input type="text" >
                        </td>
                        <td class="secondChildInput">
                            <label for="">CITY</label>
                            <input type="text" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">EMAIL</label>
                            <input type="text" >
                        </td>
                        <td class="secondChildInput">
                            <label for="">STATE/REGION</label>
                            <input type="text" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">DATE OF BIRTH (DD/MM/YYYY)</label>
                            <input type="text" >
                        </td>
                        <td class="secondChildInput">
                            <label for="">ZIP CODEPOST CODE</label>
                            <input type="text" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">CPUNTRY OF RESIDENCE</label>
                            <input type="text" >
                        </td>
                        <td class="secondChildInput">
                            <label for="">DATE (DD/MM/YYYY)</label>
                            <input type="text" >
                        </td>
                    </tr>
                </table>
            </tr>
            <tr>
                <table id="markInstructionParent">
                    <tr>
                        <td>
                            <p id="markInstruction">PLEASE MARK TICK THE APPROPRIATE SECTION BELOW</p>
                        </td>
                    </tr>
                </table>
            </tr>
            <tr>
                <table class="postalAddressesParent">
                    <tr>
                        <td id="postalAddressesFirst">
                            <div>
                                <p class="ukpostText">UNITED KINGDOM POST</p>
                                <input id="check" type="checkbox">
                            </div>
                            <p class="postalP">PLEASE POST ENTRY FORM VIA FIRST OR SECOND CLASS POST TO</p>
                            <div class="addresses">
                                <p>
                                    ZIMO SCRUTINERS
                                </p>
                                <p>
                                    CIVICA ELECTION SERVICES
                                </p>
                                <p>
                                    33 CLARENDEN ROAD
                                </p>
                                <p>
                                    LONDON
                                </p>
                                <p>
                                    L8 ONW
                                </p>
                            </div>
                        </td>
                        <td id="postalAddressesHr">
                            <div class="vertical-hr"></div>
                        </td>
                        <td id="postalAddressesSecond">
                            <!-- <td id="secondCol"> -->
                                <div>
                                    <p class="ukpostText">INTERNATIONAL POST</p>
                                    <input id="check" type="checkbox">
                                </div>
                                <p class="postalP">PLEASE POST ENTRY FORM VIA FIRST OR SECOND CLASS POST TO</p>
                                <div class="addresses">
                                    <p>
                                        ZIMO SCRUTINERS
                                    </p>
                                    <p>
                                        CIVICA ELECTION SERVICES
                                    </p>
                                    <p>
                                        33 CLARENDEN ROAD
                                    </p>
                                    <p>
                                        LONDON
                                    </p>
                                    <p>
                                        L8 ONW
                                    </p>
                                    <p>
                                        UNITED KINGDOM
                                    </p>
                                </div>
                            
                        </td>
                    </tr>
                </table>
            </tr>
            <tr>
                <table id="remindersNote">
                    <tr>
                        <td>
                            <p>PLEASE ENSURE THAT YOU HAVE COMPLETELY FILLED THE FORM</p>
                            <p>AN INCOMPLETE OR ILLEGIBLE FORM WILL NOT ENTER IN TO THE DRAW</p>
                            <P>POSTAL ENTERIES CAN ONLY BE SUBMITTED SINGULARLY. YOU MAY SEND AS MANY POSTAL AS YOU WISH. (ONE PER STAMPED ENVELOPE)</P>
                            <p id="companyNo">CIVICA ELECTION IS THE TRADING NAME REGISTERED COMPANY NUMBER 3383738. A CIVICA GROUP COMPANY</p>
                            <p>CES IS A COMPANY WITHIN THE CIVICA GROUP</p>
                        </td>
                    </tr>
                </table>
            </tr>
            <table id="footerImages">
                <tr>
                    <td id="start">
                        <img class="poweredby" src="{{ public_path('/images/poweredby.png') }}" alt="image">
                    </td>
                    <td id="center">
                        <img class="zimooloogo" src="{{ public_path('/images/zimooloogo.png') }}" alt="image">
                    </td>
                    <td id="end">
                            <img class="qr" src="{{ public_path('/images/qr.png') }}" alt="qr">
                    </td>
                </tr>
            </table>
        </table>
    </div>




</body>
</html>