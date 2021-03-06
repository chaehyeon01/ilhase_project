<?php
    include $_SERVER["DOCUMENT_ROOT"]."/ilhase/common/lib/db_connector.php";
    $mode = $_GET['mode'];
    $id = "";
    
    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }

    switch($mode){
        case 'select':
            select_corporate();
            break;

        case 'select_count':
            select_corporate_count();
            break;

        case 'delete':
            delete_corporate();
            break;

        case 'update':
            update_corporate();
            break;

        default:
            echo "wrong mode!";
            break;
    }

    function select_corporate(){
        global $conn, $id, $type;

        $sql = "select * from corporate where id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_array($result)){
            $member_data = array(
                'id' => $row['id'],
                'b_name' => $row['b_name'],
                'job_category' => $row['job_category'],
                'ceo' => $row['ceo'],
                'b_license_num' => $row['b_license_num'],
                'address' => $row['address'],
                'email' => $row['email'],
                'member_type' => $type
              );
            echo json_encode($member_data, JSON_UNESCAPED_UNICODE);
        } else {
            echo false;
        }
    }

    function select_corporate_count(){
        global $conn;

        $sql = "select count(*) from corporate";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo mysqli_fetch_array($result)[0];
        }
    }

    function delete_corporate(){
        global $conn, $id;

        $sql = "delete from corporate where id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            // echo "삭제 성공";
        } else {
            echo "삭제 실패 ".mysqli_error($conn);
        }
    }

    function update_corporate(){
        global $conn, $id;

        $b_name = $_POST['b_name'];
        $ceo = $_POST['ceo'];
        $address = $_POST['address'];
        $email = $_POST['email'];

        $sql = "update corporate set b_name = '$b_name', ceo = '$ceo', address = '$address', email = '$email' where id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            // echo "업데이트 성공";
        } else {
            echo "업데이트 실패 ".mysqli_error($conn);
        }
    }


?>