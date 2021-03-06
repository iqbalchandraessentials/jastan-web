
<style>
    header.masthead {
        margin-top: 80px;
      position: relative;
      margin-bottom: 3rem;
      padding-top: calc(8rem + 57px);
      padding-bottom: 8rem;
      background: no-repeat center center;
      background-color: #6c757d;
      background-size: cover;
      background-attachment: scroll;
      background-image: url('https://images.unsplash.com/photo-1621193793262-4127d9855c91?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80')
    }
    
    header.masthead:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      /* background-color: #212529; */
      opacity: 0.5;
    }
    
    header.masthead .page-heading,
    header.masthead .post-heading,
    header.masthead .site-heading {
      color: #fff;
    }
    
    header.masthead .page-heading,
    header.masthead .site-heading {
      text-align: center;
    }
    
    header.masthead .page-heading h1,
    header.masthead .page-heading .h1,
    header.masthead .site-heading h1,
    header.masthead .site-heading .h1 {
      font-size: 3rem;
    }
    
    header.masthead .page-heading .subheading,
    header.masthead .site-heading .subheading {
      font-size: 1.5rem;
      font-weight: 300;
      line-height: 1.1;
      display: block;
      margin-top: 0.625rem;
      font-family: "Open Sans", -apple-system, BaMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
    
    header.masthead .post-heading h1,
    header.masthead .post-heading .h1 {
      font-size: 2.25rem;
    }
    
    
    @media (min-width: 992px) {
      header.masthead {
        padding-top: 6.5rem;
        padding-bottom: 6.5rem;
      }
    
      header.masthead .page-heading h1,
      header.masthead .page-heading .h1,
      header.masthead .site-heading h1,
      header.masthead .site-heading .h1 {
        font-size: 4rem;
      }
    
      header.masthead .post-heading h1,
      header.masthead .post-heading .h1 {
        font-size: 3.5rem;
      }     
    }
    </style>
    
    <header class="masthead">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>
                          @yield('title-jumbotron')
                        </h1>
                        <span class="subheading">Jasa Asuransi Tania</span>
                    </div>
                </div>
            </div>
        </div>
    </header>