* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    display: flex;
    background: white;
    min-height: 100vh;
    
    
}

/* .sidebar {
    width: 250px;
    height: 100vh;
    background: #172b58;
    color: white;
    padding: 20px;
    position: fixed;
    overflow-y: auto;
    flex-direction: column;
} */

/* Logo Styling */
/* .logo {
    text-align: center;
    margin-bottom: 20px;
}

.logo img {
    width: 180px;
} */

/* Menu Styling */
.sidebar {
    width: 250px;
    height: 100vh;
    background: #172b58;
    color: white;
    padding: 20px;
    position: fixed;
    overflow-y: auto;
}

/* Logo Styling */
.logo {
    text-align: center;
    margin-bottom: 20px;
}

.logo img {
    width: 180px;
}

/* Menu Styling */
.menu {
    list-style: none;
    padding: 0;
}

.menu li {
    padding: 12px 10px;
    display: flex;
    align-items: center;
    cursor: pointer;
    font-size: 14px;
    border-radius: 5px;
    color: white;
}

.menu li i {
    margin-right: 12px;
    font-size: 14px;
    color: rgb(97, 187, 235);
    margin-left: 20px;
}

.menu .arrow {
    margin-left: auto;
}

/* Hover Effect */
/* .menu li:hover 
.menu li.active {
    background-color: #2563eb;
} */

  
  
  
/* Section Titles */
.section-title {
    font-size: 15px;
    font-weight: bold;
    margin: 15px 10px 5px 30px;
    color: rgba(255, 255, 255, 0.909);
}

/* .main {
    padding: 20px 40px;
  } */
  .main {
    margin-left: 250px;
    padding: 0px;
    width: calc(100% - 250px);
}
/* Default link styling */
.menu li a {
    text-decoration: none !important;
    color:white !important;
    display: flex;
    align-items: center;
    gap: 1px;
    padding: 2px 5px;
    border-radius: 6px;
    transition: all 0.3s ease;
  }
  
  
 
  

  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:#e0e0e0;
    padding: 10px 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }

 /* Optional left icon */
.left-icon {
    font-size: 20px;
    color: #666;
  }
  
  /* Right section of the header */
  .header-right {
    display: flex;
    align-items: center;
    gap: 40px;
    font-size: 25px;
    margin-right: 40px;
  }
  
  /* Light mode icon */
  .light-mode-icon {
    font-size: 30px;
    color: #666;
    cursor: pointer;
    margin-right: -20px;
  }
  
  .profile-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    
  }
  
  .dashboard-intro {
    margin-top: 30px;
    margin-bottom: 20px;
    padding-left: 20px;
  }
  
  .dashboard-intro h3 {
    color: #69b3dd;
    font-weight: 300px;
    font-size: 20px;
    margin-left:0px;
  }
  
  .dashboard-intro p {
    color: #69b3dd;
    font-size: 14px;
    margin: 5px 0 0;
  }
  :root {
    --bg-color: #f2f2f2;
    --text-color: #69b3dd;
}

body.dark-mode {
    --bg-color: rgb(17, 17, 54);
    --text-color: #e0d587;
}

body {
    background-color: var(--bg-color);
    color: var(--text-color);
    transition: all 0.3s ease;
}

.theme-icon {
    background: none;
    border: none;
    color: #666;
    font-size: 1.5rem;
    color: var(--text-color);
    cursor: pointer;
    margin-right: 15px;
}

  
/* .main {
    margin-left: 250px;
    padding: 0px;
    width: calc(100% - 250px);
}


.header {
    display: flex;
    justify-content: flex-end; /* aligns items to the right */
    /* align-items: center;       /* vertically center items */
    /* background: whitesmoke;
    padding: 15px 20px;
    margin-right: auto;
    border-radius: 3px;
    margin-bottom: 20px;
    box-shadow: 0 0 2px rgba(0,0,0,0.1); */ 
/* } */
/* .header-icons {
    display: flex;
    align-items: center;
    gap: 15px; /* spacing between icon and image */
/* }  */

/* .profile-img {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    
}  */


/* Stats Cards Layout */
.stats {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
}

/* Individual Card */
.card {
    background: #e0e0e0;
    padding: 20px;
    width: 30%;
    height: 200px;
    border-radius: 8px; /* sharp edges */
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
    text-align: left;
    color: #69b3dd;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-header h5 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.card-header i {
    font-size: 20px;
    color: #69b3dd;
}

.card h3 {
    font-size: 23px;
    margin: 10px 0;
    color: #69b3dd;
}

.card-footer {
    font-size: 14px;
    color: #69b3dd;
}
.dashboard-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    padding: 30px;
    gap: 30px;
    flex-wrap: wrap;
}

.chart-section {
    background: #e0e0e0;
    padding: 20px;
    border-radius: 20px;
    width: 45%;
    min-width: 300px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
}
.chart-section.h3{
    color:#7daac4;
}




.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}

#donutChart {
    width: 300px !important;
    height: 360px !important;
    border-radius: 10px;
    
}

#linechart{
    width: 300px !important;
    height: 300px !important;
}

    


 


