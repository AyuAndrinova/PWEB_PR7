<?php
require_once 'contact.php';
$arr = Contact::select();
// $arr = Contact::insert();
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <style>
    table, tr, th, td{
      border: 1px solid rgb(168, 166, 166);
      padding: 5px;
      text-align: center;
    }
  </style>
  <title>DASHBOARD</title>
</head>
<div class="flex "> 
    <div type="sidebar" class="flex flex-col bg-w min-h-screen p-5 min w-72">
        <div>
            <h1 class="text-3xl p-2 font-extrabold font-sans text-purple-600 shadow-sm">Contact App</h1>
            <hr class="border-gray-400 border-t-2 mt-2 mb-2 ">
        </div>
        <div type="sidebar-menu" class="flex flex-col">
            <ul>
                <li class="flex mt-2">
                    <a href="#" class="flex flex-row items-center text-base text-center mb-2 font-semibold bg-purple-600 rounded-md shadow-sm w-[200px] p-1 text-white hover:bg-white hover:text-purple-600 hover:font-semibold hover:border-2"> 
                      <span ><img src="./assets/icon_person.png" alt="" float="center" class="p-1"></span> Akun
                    </a>
                </li>
            </ul>
            <ul>
                <li class="flex mt-2 ">
                    <a href="#" class="flex flex-row items-center text-base text-center mb-2 font-semibold bg-purple-600 rounded-md shadow-sm w-[200px] p-1 text-white hover:bg-white hover:text-purple-600 hover:font-semibold hover:border-2">
                      <span ><img src="./assets/icon_cog.png" alt="" float="center" class="p-1 "></span> Pengaturan
                    </a>
                </li>
            </ul>
            <ul>
                <li class="flex mt-2 ">
                    <a href="./login.html" target="_blank" class="flex flex-row items-center text-base text-center mb-2 font-semibold bg-purple-600 rounded-md shadow-sm w-[200px] p-1 text-white hover:bg-white hover:text-purple-600 hover:font-semibold hover:border-2">
                      <span ><img src="./assets/icon_logout.png" alt="" float="center" class="p-1 "></span> Logout
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="p-9 bg-purple-400 w-full flex justify-center items-center">
        <div class="w-[1100px] p-20 flex-col bg-white rounded-md shadow-sm">
            <div class="flex flex-row justify-between ">
                <h2 class="font-extrabold font-sans text-2xl text-purple-600 shadow-sm">Dashboard</h2> 
            </div>
            <div>
                <hr class="border-gray-400 border-t-2 mt-2 ">
            </div>
            <div class="flex flex-col mt-2 ">
              <table class="table border-t-1 border-gray-400">
                <thead>
                  <tr>
                    <th >Id</th>
                    <th>No HP</th>
                    <th>Owner</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    for ($i = 0; $i < count($arr['ID']); $i++) {
                  ?>
                    <tr>
                      <td><?php echo $arr['ID'] [$i] ?></td>
                      <td><?php echo $arr['No'] [$i]?></td>
                      <td><?php echo $arr['Owner'] [$i]?></td>
                      <td class="flex flex-row justify-between border-none">
                        <button type="button" class="block text-base font-semibold bg-purple-400 rounded-md shadow-sm w-[100px] p-1 text-white hover:bg-white hover:text-purple-600 hover:font-semibold hover:border-2">Update</button>
                        <button type="button" class="block text-base font-semibold bg-purple-400 rounded-md shadow-sm w-[100px] p-1 text-white hover:bg-white hover:text-purple-600 hover:font-semibold hover:border-2">Delete</button>
                      </td>
                    </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
        </div>
    </div>
</div>
</html>