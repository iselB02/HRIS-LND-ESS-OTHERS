<div class="my_profile_container">
    <div class="my_profile_main">
        <div class="main_user_details">

            <div id="cover-photo">
            <img src="{{ asset('images/background.png') }}" alt="Cover Photo" class="cover_photo">
            </div>  

            <div class="user_info">
                <p id="name">Juan C Dela Cruz</p>
                <p class="info">Studied at Pamantsan ng Lungsod ng Maynila</p>
                <p class="info">Work at Oro De Bankos</p>
                <p class="info">09548623012</p>
            </div>

            <div id="profile-photo">
            <img src="{{ asset('images/test-photo.png') }}" alt="Profile Picture" class="profile_picture">
            </div>
            
        </div>
        <div class="main_about">
           <p>Hello! I'm Juan C. Dela Cruz, a marketing professional hailing from Chicago. 
            My journey through Northwestern University has shaped my professional identity,
             leading me to accumulate over 10 years of experience in digital marketing. Currently, 
             I'm engaged as a Digital Marketing Manager at XYZ Agency, where I specialize in strategic 
             campaign planning, data analytics, and content marketing. Beyond work, I indulge in photography, 
             hiking, and experimenting with new recipes, emphasizing a well-rounded lifestyle. Guided by innovation, collaboration, and a commitment to excellence, I've achieved milestones such as launching award-winning marketing campaigns, securing a 20% increase in client engagement, and earning recognition as a top-performing team member. Looking forward, I aspire to lead cross-functional teams, 
            drive innovative marketing strategies, and contribute to the evolving landscape of digital marketing. Connect with me on my LinkedIn profile or explore my journey further at johnsmith.com. I'm always open to connecting, sharing ideas, and exploring potential collaborations!</p>
        </div>
        <div class="main_seminars_tag">
            <table>
                <thead>
                    <th>Title</th>
                    <th>Organization</th>
                    <th>Date</th>
                    <th>Location</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Effective Leadership</td>
                        <td>Leadership Institute</td>
                        <td>January 10, 2023  </td>
                        <td>Conference Room A </td>
                    </tr>
                    <tr>
                        <td>Digital Marketing Trends</td>
                        <td>Marketing Pro</td>
                        <td>February 5, 2023 </td>
                        <td>Virtual Event </td>
                    </tr>
                    <tr>
                        <td>Project Management Basics</td>
                        <td>Project Masters </td>
                        <td>January 10, 2023  </td>
                        <td>Training Center B </td>
                    </tr>
                    <tr>
                        <td>Communication Skills </td>
                        <td>Communication Hub</td>
                        <td>April 15, 2023</td>
                        <td>Seminar Hall</td>
                    </tr>
                    <tr>
                        <td>Data Analytics Workshop</td>
                        <td>Data Insights</td>
                        <td>May 8, 2023</td>
                        <td>Innovation Lab  </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="my_profile_side">
        <div class="side_edit">
            <button class="edit_photo">Edit Profile/Cover Photo</button>
            <button class="edit_info">Edit Info</button>
        </div>
        <div class="side_add_info">
           <span class="email"> Emails </span>
           <span>juandelacruz@gmail.com </span>
           <span>juandelacruz2000@plm.edu.ph </span>
           <span>delajuancruz@yahoo.ph </span>
           <span class="phone">Phone Numbers </span>
           <span>0912-345-6789                  MOGO </span>
           <span>0999-999-9999                TODI </span>
           <span>8999-1122                            TELEPHONE </span>
           <span class="socmed">Social Media </span>
           <span>http:facebook/delacruz                 FB</span>
           <span>http:x/delacruz                                  X</span>
            <span>http:instagram/delacruz                IG</span>
        </div>
    </div>
</div>


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/myprofilepage.css') }}">
@endpush