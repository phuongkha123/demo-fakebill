<!DOCTYPE html>
<html lang="vi">
<link rel="icon" href="/favicon.ico">
<head>
    <meta charset="utf-8">
   <?php
   require 'files/check-session.php';
   if(!isset($_SESSION['username'])){
       header("Location: /login");
   }
   require 'files/config.php';
   use Melbahja\Seo\MetaTags;

$metatags = new MetaTags();

$metatags
        ->title('Api Web Con')
        ->description('Dịch vụ fake bill Vietcombank,Sacombank,MBBank,...')
        ->meta('author', 'Mohamed Elabhja')
        ->image('https://avatars3.githubusercontent.com/u/8259014');

echo $metatags;
   ?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="./css/vendors/flatpickr.min.css" rel="stylesheet">
    <link href="./css/vendors/flatpickr.min.css" rel="stylesheet">
    <link href="./css/nhan.css?v2" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
            document.querySelector('html').style.colorScheme = 'light';
        } else {
            document.querySelector('html').classList.add('dark');
            document.querySelector('html').style.colorScheme = 'dark';
        }
    </script> <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>   
</head>

<body
    class="font-inter antialiased bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400"
    :class="{ 'sidebar-expanded': sidebarExpanded }"
    x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
    x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
>

<?php include('files/header.php');?>
            
            <main class="grow">
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-2xl mx-auto">

              
     <div class="px-4 py-8">
                        <div class="">
    
                            <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">Kết nối API</h1>
                            
                            
                                <div class="space-y-3 mb-8">
                                 
                                   <div class="overflow-x-auto">
                                    <table class="table-auto w-full dark:text-slate-300">
                                        <!-- Table header -->

                                        <!-- Table body -->
                                        <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
                                      
                                            <!-- Row -->
                                      
                                                
                                                  <tr>
                                                <td>
                                                    API key
                                                </td>
                                                <td class="p-2">
                                                    <div class="flex items-center">
                                                         <div class="text-slate-800 dark:text-slate-100"><?=$user_new['serial_key']?></div>
                                                      <button data-clipboard-text="<?=$user_new['serial_key']?>" class="copy ml-2 btn-sn btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 hover:border-slate-300 dark:hover:border-slate-600">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-copy" width="15" height="15" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
  <path d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2" />
</svg>
                                        </button>
                                                    </div>
                                                </td>
                                             
                                            </tr>
                                        </tbody>
                                    </table>
<p>
    Source code website con: <a href="https://drive.google.com/drive/folders/15RRcxMemKkeXacmuihE8pJbSt0qopF2j?usp=drive_link">https://drive.google.com/drive/folders/15RRcxMemKkeXacmuihE8pJbSt0qopF2j?usp=drive_link</a>
</p>
                                </div>
                                </div>
                               
                       
    
                        </div>
                    </div>

                </div>
            </main>
<script>
    var clipboard = new ClipboardJS('.copy');

clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);
    alert('Đã copy vào bộ nhớ đệm');
    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});
</script>
       <?php
       include('files/footer.php');?>