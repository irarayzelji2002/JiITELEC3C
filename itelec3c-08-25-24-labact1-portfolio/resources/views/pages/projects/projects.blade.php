<section id="projects">
    <h2>Projects</h2>
    <ul>
        <li>
            <h3><a href="{{ route('project-details', ['id' => 1]) }}">Project 1</a></h3>
            <p>Brief description of the project.</p>
            <a href="{{ url('/projects/1') }}">View Details</a>
        </li>
        <li>
            <h3>Project 2</h3>
            <p>Brief description of the project.</p>
            <a href="{{ url('/projects/2') }}">View Details</a>
        </li>
    </ul>
    <a href="{{ route('home') }}">< Back to Home</a>
</section>
