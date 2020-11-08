@extends('main')

@section('title', '| About Me')

@section('stylesheets')

	{!! Html::style('css/styles.css') !!}

@endsection

@section('content')

	    

        <div class="row">
            <div class="col-md-12">
                <h1>Work Experience and Education</h1>

                <div class="col-md-3">
              		<img src="{{ asset('images/3x4.jpg') }}" height="100%" width="100%" />
              	</div>

              	<div class="col-md-9">
	                <p class="btn-h1-spacing paragraph-indent">
	                	I am a brazilian Data Scientist with strong background in data analysis. Graduated in Statistics by Universidade de Brasília (UnB), in 2014. I made my way always looking to improve myself, not only as a good professional but also as a human being. This are my main milestores in my learning career.
	                </p>

                	<div class="paragraph-indent">
	                	<p> &bkarow; <b>Masters in Business Administration (MBA) - Project Management</b> - Fundação Getúlio Vargas (FGV) - 2020;</p>

	                	<p> &bkarow; <b>Postgraduate - Data Science</b> - Instituto de Ensino Superior de Brasília (IESB) - 2019; and</p>

	                	<p> &bkarow; <b>Bachelor - Statistics</b> - Universidade de Brasília (UnB) - 2014.</p>
	                </div>

	                <div class="paragraph-indent">
	                	Furthermore I already have 10 years of work experience (4 years before graduate and 6 after get my degree), have been through some great companies and have faced big challenges in Analytics, Big Data and Machine Learning. Here are more details:
	                </div>

                	<div class="paragraph-indent">
                		<p class="btn-h1-spacing">&bigstar; <b>Statistician | Data Scientist</b> at Brazilian Air Force (Currently job since 08/2015);</p>
                		<p>&bigstar; <b>Statistical Research Assistant</b> at Institute for Applied Economic Research - IPEA (04/2015 - 08/2015)</p>
                		<p>&bigstar; <b>Statistical Assistant</b> at Chamber of Deputies (01/2015 - 07/2015) </p>
                		<p>&bigstar; <b>Statistical Assistant</b> at ESTAT Consultoria (01/2011 - 06/2014)</p>
                	</div>
                </div>               
            </div>
        </div><!-- End first row -->

        <div class="row">
            <div class="col-md-12">
                <h1 align="right">Skills and Programming</h1>

                <div class="col-md-9">
	                <p class="btn-h1-spacing paragraph-indent">
	                	In the workplace I am service-focused, but I always try to be useful and helpful to my team. It is very important to understand the needs of the one's that we are serving, that's why adaptability is also one of my abilities. Organization and the planning habit made me a good manager and able to apply my knowledge in the following fields:
	                </p>

                	<div class="paragraph-indent">
	                	<p> &blacktriangleright; <b>Machine Learning</b>;</p>
	                	<p> &blacktriangleright; <b>Data Mining</b>;</p>
	                	<p> &blacktriangleright; <b>Project Management</b>;</p>
	                	<p> &blacktriangleright; <b>Business Intelligence</b>; and</p>
	                	<p> &blacktriangleright; <b>Predictive Modeling</b>.</p>
	                </div>

	                <div class="paragraph-indent">
	                	Programming is one of my passions. Since High School I was facinated by code and algorithms, I embraced study has a part of my life and I just can't stand still, there's always a new course to know something new. Here are the languages that I am most used of:	                	                	
	                </div>

                	<div class="paragraph-indent">
                		<p> &blacktriangleright; <b>Statistics and Data Science: Pyhton, R, SQL and SAS</b>;</p>
                		<p> &blacktriangleright; <b>Web Development: HTML, CSS, Javascript and PHP</b>.</p>
                	</div>
                </div>        

                <div class="col-md-3">
              		<img src="{{ asset('images/Presentation_ISI_2015.jpeg') }}" height="100%" width="100%"/>
              	</div>       
            </div>
        </div><!-- End second row -->

        <div class="row">
            <div class="col-md-12">
                <h1>Family and Social Life</h1>

                <div class="col-md-3">
              		<img src="{{ asset('images/IMG_20200624_140101.jpg') }}" height="100%" width="100%"/>
              	</div>

              	<div class="col-md-9">
	                <p class="btn-h1-spacing paragraph-indent">
	                	I like to spend my free time with my family and friends, watching a comedy tv show with my wife, having a walk with my mother or having a beer with friends. My main hobbies are playing eletric guitar, gym workout and video games.
	                </p>
                </div>               
            </div>
        </div><!-- End third row -->



@endsection
