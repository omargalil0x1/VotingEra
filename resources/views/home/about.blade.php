@extends('components.main')

@section('title', 'About Us')

@section('main-navbar')
    @parent
@endsection

<head>
    @vite('resources/css/about.css')
</head>

@section('main-content')
    <section id="first-section" class="about">
        <h1>About Us</h1>
        <p style="font-weight: bold; color: black">
          Voting-Era choose leader...
        </p>
        <div class="about-info">
            <div>
                <p style="color: white">
                    Empower your voice and gather valuable insights with VotingEra!
                    Our user-friendly platform allows anyone to create and share polls in a matter of minutes.
                    Simply choose your question type, add answer options, customize the look and feel, and share your poll with your audience.
                    Whether you're collecting feedback from colleagues, conducting market research, or gauging public opinion,
                    our system helps you gather reliable data and visualize results through intuitive charts and graphs.
                    With robust features like anonymous voting, data filtering, and advanced reporting, you can gain deeper insights into your audience and make informed decisions with confidence.
                </p>
            </div>
        </div>
    </section>

    <section id="first-section" class="about">
        <h1>How does it work</h1>
        <p style="font-weight: bold; color: black">
          Experience the ease of creating and managing polls with VotingEra!
        </p>
        <div class="about-info">
            <div>
                <ul>
                    <li> Craft your question: Choose the perfect question type, whether it's multiple choice, yes/no, ranking, or open-ended. </li>
                    <li> Customize your poll: Tailor your poll's appearance with various themes and color options to match your brand or preferences. </li>
                    <li> Spread the word: Share your poll easily with a unique link, QR code, or by embedding it directly on your website or social media platforms. </li>
                    <li> Gather valuable data: Collect responses securely, even allowing anonymous voting for sensitive topics. </li>
                    <li> Gain insights: Analyze results with clear and intuitive charts and graphs, making it easy to understand the data gathered. </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="first-section" class="about">
        <h1>Key Features</h1>
        <div class="about-info">
            <div>
                <ul>
                    <li> Diverse question types (multiple choice, yes/no, ranking, open-ended)</li>
                    <li> Customizable branding and themes </li>
                    <li> Easy sharing options (links, QR codes, embedding) </li>
                    <li> Anonymous voting capabilities </li>
                    <li> Real-time results and insightful data visualizations </li>
                    <li> Advanced reporting and data export options </li>
                    <li> Secure and reliable data management </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="team">
        <h1>Contact Me</h1>
        <div class="team-cards">
            <div class="card">
                <div class="card-img">
                    <img src="{{Vite::asset('resources/images/creator.png')}}" alt="User 1">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Rodan</h2>
                    <p class="card-role">CEO and Founder</p>
                    <p class="card-email">omargalil42@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </section>
@endsection
