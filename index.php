<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/dist/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Alphaware Technology</title>
  </head>
  <body>
  <?php echo $alert; ?>
    <div class="flex bg-gray-100 h-20 w-full justify-center py-2">
    <a href="https://www.alphaware.io/">
      <img class="h-16  w-24" src="./img/logo.png" alt="logo" />
      </a>
    </div>
    <div class=" flex  px-8 w-full bg-[url('./img/form.webp')] bg-contain h-fit justify-between]">
     <div class="d-flex flex-column w-1/2 py-12 pl-36 space-y-5
     ">
            
      
            <h1 class="text-5xl font-bold text-white">Expand Your Digital  </h1>
<h1 class="text-5xl font-bold text-white">Footprint Across Mobile</h1>
<h1 class="text-5xl font-bold text-white">And Web</h1>
<p class="text-white text-base">Alphaware is a Lading Technology consulting company which helps visionaries create new software products with ease, joy and class-apart technology services through digital innovation that help you realize business goals and project aspirations.</p>
<p class="text-white text-base pt-2 ">
Alphaware is a full-service IT company, providing network management and support as well as custom application and web development services to clients. At Alphaware, we take a different approach than most IT companies. Our employee-owners understand how a business operates, what’s important to an organization’s success, and how to control costs. And they apply those principles every day when it comes to your technology. We host an in-house team of experienced professionals.
</p>
<p class="text-white text-base pt-2">We ideate and identify possibilities, and help you choose the ones that make the maximum impact. Offering full-cycle technology solutions that streamline your digital transformation journey with cutting-edge technical expertise.</p>

        </div>
        <div class="flex w-fit py-20 px-12 ">
            
            
        <div class="d-flex flex-column w-full justify-center bg-white rounded-lg ">
           
            <form class="max-w-xl px-4" action="" method="POST">
    <div class="flex rounded-t-md bg-gray-500  py-2 justify-center -mx-4 ">
        <h1 class="text-2xl font-bold text-white text-center"> Submit An Inquiry</h1>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6 px-4 py-4">
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="firstname" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input type="text" name="lastname" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
        </div>
      </div>
      <div class="grid md:grid-cols-2 md:gap-6 px-4 py-4">
        <div class="relative z-0 mb-6 w-full group">
            <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <input type="tel" name="phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number </label>
        </div>
      </div>
    
    <div class="grid md:grid-cols-2 md:gap-6 px-4 py-4">
        <div class="relative z-0 mb-6 w-full py-2 group">
            <input type="text" name="company_name" id="company_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
            <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company name</label>
        </div>
      <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="job_title" id="job_title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
          <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Job Title/Designation</label>
      </div>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6 px-4 py-4">
      <div class="relative z-0 mb-6 w-full group">
        <div className="flex flex-col w-full outline-none  mt-8">
            <label for="countries" 
            
            class="block mb-2 text-sm  text-gray-500 dark:text-gray-400">Industry</label>
<select id="countries" name="industry"class="bg-gray-50 focus:border-none focus:outline-none border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Please select</option>
  <option >Art & Design</option>
  <option >Constraction & Real Estate</option>
  <option>Banking</option>
  <option >Customer Goods</option>
  <option >Corporate Services</option>
  <option >Captal Markets</option>
  <option >Energy,Miniing & Utilities</option>
  <option > Education</option>
  <option >Entertainment</option>
  <option >Financial Services</option>
  <option >Goverment & Public Services</option>
  <option >Harware &Telecom </option>
  <option > Healthcare</option>
  <option >Insurance</option>
  <option >Legal</option> 
  <option >Manufacturing</option> 
  <option >Media & Communications</option> 
  <option >Non-profit</option> 
  <option >Online & Ecommerce</option> 
  <option >Pharma</option>
  <option >Retail</option>
  <option >Software & IT Services</option>
  <option >Travel,Transport & Logistics</option>
  <option >Others</option>
  <option >Hospitality</option> 
  <option >Market Research</option> 
  <option > Analyst</option> 
  <option >staffing & Recruitment</option> 
  <option > Publishing</option> 
</select>
          </div>
          
      </div>
      <div class="relative z-0 mb-6 w-full outline-none group">
        <div className="flex flex-col w-full   mt-8">
            <label for="countries" class="block mb-2 text-sm text-gray-500 dark:text-gray-400" >Company Size</label>
<select id="countries"name="company_size" class="bg-gray-50 focus:border-none focus:outline-none border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Please select</option>
  <option name=''>10,001+ employees</option>
  <option >50,001-10,000 employees</option>
  <option >1,001-5000 employees</option>
  <option >501-1000 employees</option>
  <option >201-500 employees</option>
  <option >101-200 employees</option>
  <option >26-100 employees</option>
  <option >1-25 employees</option>
  
</select>
          </div>
    </div>
    </div>
    <div class="relative z-0 mb-6 w-full group py-4 px-4">
        <input type="text" name="message" id="floating_massage" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>
    </div>
   
    <div class="flex w-full justify-center pb-4">
    <button type="submit" name="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-1/2  px-12 py-3 text-center text-xl dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800">Submit</button>
</div>
<div class="flex flex-row px-4 pb-10">
    
<p class="text-gray-500 text-sm px-4">By submitting this form, you agree to communications from Alphaware. For more information, please see our. <a href="https://www.alphaware.io/"><span class="text-gray-500 text-sm hover:font-bold hover:text-red-700 pl-2 underline">privacy policy</span></a></p> 

</div>

</div>
  </form>
   </div>
        </div>
    </div>
    </div>
    <!-- services -->
    <div class="flex flex-col w-full py-10 justify-center ">
        <div class="flex flex-col">
<h1 class="text-4xl font-bold text-center" > Services</h1>
<p class="text-sm text-gray-500 text-center py-4 mb-8">
    Scale the digital maturity curve with our end-to-end mobile application development services</p> 
      </div>
        <div class="grid md:grid-cols-3 md:gap-6 px-20 py-8 ml">
            
<div class="flex flex-col w-80 bg-white rounded-lg  dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

        <img class=" h-32 w-auto text-center object-contain" src="./img/Prototyping & Strategy.jpg" alt="">
    
    <div class="">
       
            <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Prototyping & Strategy</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Design thinking approach to maximize ROI </p>
    </div>
    </div>
    <div class=" flex flex-col w-80 bg-white rounded-lg  dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

        <img class=" h-32 w-auto text-center object-contain" src="./img/s2.webp" alt="">
    
    <div class="">
       
            <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hybrid Mobile App Development</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Leverage our Xamarin Cross Platform Development Expertise to reduce time-to-market</p>
    </div>  
    </div>
    <div class=" flex flex-col w-80 bg-white rounded-lg  dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

        <img class=" h-32 w-auto text-center object-contain" src="./img/s3.jpg" alt="">
    
    <div class="">
       
            <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Native Application Development</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Drive superior app performance across iOS and Android platforms </p>
    </div>

    </div>
    <div class=" flex flex-col w-80 bg-white rounded-lg  dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

        <img class=" h-32 w-auto text-center object-contain" src="./img/s4.png" alt="">
    
    <div class="">
       
            <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Progressive Web Development</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Drive seamless and fast user experience in remote areas </p>
    </div>

    </div>
    <div class=" flex flex-col w-80 bg-white rounded-lg  dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

        <img class=" h-32 w-auto text-center object-contain" src="./img/s5.webp" alt="">
    
    <div class="">
       
            <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Full Stack Development</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Front end development, backend development and integration </p>
    </div>

    </div>
    <div class=" flex flex-col w-80 bg-white rounded-lg  dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

        <img class=" h-32 w-auto text-center object-contain" src="./img/s6.jpg" alt="">
    
    <div class="">
       
            <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Enterprise Mobile App Development</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Leverage digital technologies such as AI/ML, IoT, cloud and analytics </p>
    </div>

    </div>
    <div class = "col-span-3 flex w-full justify-center">
    <div class=" flex flex-col w-80 bg-white rounded-lg  dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

        <img class=" h-32 w-auto text-center object-contain" src="./img/7s.png" alt="">
    
    <div class="">
       
            <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">UX Design Services</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Leverage our team of world class mobile UX design consultants  </p>
    </div>

    </div>
</div>
    
 </div>
</div>
<!-- solutions -->
<div class="flex flex-col w-full py-10 justify-center ">
    <div class="flex flex-col">
<h1 class="text-4xl font-bold text-center" >Solutions</h1>
<p class="text-sm text-gray-500 text-center py-4 mb-8">
    As a one of the best mobile application development company in india, we provide best-in-class solutions for companies across industries</p> 
  </div>
    <div class="grid md:grid-cols-3 md:gap-6 px-20 py-8 ml-10">
        
<div class=" flex flex-col w-80 bg-white rounded-lg py-6 dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

    <img class=" h-32 w-auto text-center object-contain" src="./img/Media Streaming.jpg" alt="">

<div class="">
   
        <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Media Streaming</h5>
    </a>
    
</div>
</div>
<div class="flex flex-col w-80 bg-white rounded-lg py-6 dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

    <img class=" h-32 w-auto text-center object-contain" src="./img/so2.png" alt="">

<div class="">
   
        <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Digital Content Distribution</h5>
    </a>
    
</div>  
</div>
<div class="flex flex-col w-80 bg-white rounded-lg py-6 dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

    <img class=" h-32 w-auto text-center object-contain" src="./img/mCommerce.jpg" alt="">

<div class="">
   
        <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">mCommerce</h5>
    </a>
    
</div>

</div>
<div class="flex flex-col w-80 bg-white rounded-lg py-6  dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

    <img class=" h-32 w-auto text-center object-contain" src="./img/so4.png" alt="">

<div class="">
   
        <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mobile Healthcare</h5>
    </a>
    
</div>

</div>
<div class=" flex flex-col w-80 bg-white rounded-lg  py-6 dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">

    <img class=" h-32 w-auto text-center object-contain" src="./img/so5.webp" alt="">

<div class="">
   
        <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Workflow & Asset Management</h5>
    </a>
   
</div>

</div>
<div class=" flex flex-col w-80 bg-white rounded-lg  dark:bg-gray-800 dark:border-gray-700 py-6 justify-center items-center text-center">

    <img class=" h-32 w-auto text-center object-contain" src="./img/Mobile Games.jpg" alt="">

<div class="">
   
        <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mobile Games</h5>
    </a>
   
</div>

</div>
<div class = "col-span-3 flex w-full justify-center">
    <div class=" flex flex-col w-80 bg-white rounded-lg  dark:bg-gray-800 dark:border-gray-700 justify-center items-center text-center">
    <img class=" h-32 w-auto  object-contain" src="./img/so7.jpg" alt="">

<div class="">
   
        <h5 class="m-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Fleet Management</h5>
    </a>
    
</div>

</div>
</div>

</div>
</div>
<!-- Technology -->
<div class="flex flex-col w-full py-10 justify-center m">
    <div class="flex flex-col bg-transparent z-50">
<h1 class="text-4xl font-bold text-center text-gray-500" > Technology Expertise</h1>
<p class="text-sm text-gray-500 text-center py-4 mb-2">
    Our mobile app developers utilize agile development strategies to convert your ideas into apps that anticipates user needs and provides delightful customer experiences

</p> 
<p class="text-sm text-gray-500 text-center  ">1001+ Apps Successfully Delivered | 900+ Skilled Consultants</p>
<p class="text-sm text-gray-500 text-center mb-10  ">On-demand Scalability | Agile DevOps Expertise</p>
  </div>
  
    <div class="grid md:grid-cols-5 md:gap-6 px-20 py-20 ">
    <img class=" h-32 w-48 text-center object-contain" src="./img/l1.png" alt="">
        
        <img class=" h-32 w-auto text-center object-contain" src="./img/l2.png" alt="">
        <img class=" h-32 w-auto text-center object-contain" src="./img/l3.svg" alt="">
        <img class=" h-32 w-auto text-center object-contain" src="./img/l4.png" alt="">
        <img class=" h-32 w-auto mt-2 text-center object-contain" src="./img/l5.png" alt=""> 
        
</div>
        
<!-- footer -->
<div class="flex  h-10 w-full bg-black justify-center ">
    <h1 class="text-white text-lg">@ 2022</h1>
    <img class="h-10  w-10" src="./img/logo.png" alt="logo" />
    <h1 class="text-white text-lg">Alphaware </h1>
</div>


</body>
</html>
