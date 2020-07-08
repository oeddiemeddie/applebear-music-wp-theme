<?php get_header(); ?>

    <h2 id="homepage-home-section">Apple Bear</h2>

    <section id="music">
    <h3 id="homepage-music-section">Music</h3>
        <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_qm58VgnLjs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="homepage-links">
            <a href="https://www.youtube.com/channel/UCXPAQzWFkDqyBEffKtiSc9g">Youtube</a>
            <a href="https://applebear.bandcamp.com/">bandcamp</a>
        </div>
    </section>

    <section id="events">
    <h3 id="homepage-event-section">Events</h3>
        <div class="events-container">
            <div class="event-display">
                <div class="event-date">
                    <div>Aug</div>
                    <div>31</div>
                </div>
                <div class="event-detail">
                    <div class="event-title">Open Mic</div>
                    <div class="event-location">Convention Center</div>
                    <div class="event-description">Come enjoy a meal at the blankety blanky something while I play music...</div>
                    <a href="#">...More Details</a>
                </div>
            </div>
            <div class="event-display">
                <div class="event-date">
                    <div>Aug</div>
                    <div>31</div>
                </div>
                <div class="event-detail">
                    <div class="event-title">Open Mic</div>
                    <div class="event-location">Convention Center</div>
                    <div class="event-description">Come enjoy a meal at the blankety blanky something while I play music...</div>
                    <a href="#">...More Details</a>
                </div>
            </div>
            <div class="event-display">
                <div class="event-date">
                    <div>Aug</div>
                    <div>31</div>
                </div>
                <div class="event-detail">
                    <div class="event-title">Open Mic</div>
                    <div class="event-location">Convention Center</div>
                    <div class="event-description">Come enjoy a meal at the blankety blanky something while I play music...</div>
                    <a href="#">...More Details</a>
                </div>
            </div>
        </div>
        <div class="homepage-links">
            <a href="#">All Events</a>
            <a href="#">Past Events</a>
        </div>
    </section>

    <section id="contact">
    <h3 id="homepage-contact-section">Contact</h3>
        <div>
            <form>
                <label for="name-input">Name:</label>
                <input type="text" id="name-input" placeholder="Namey Namerson" />
                <label for="email-input">Email:</label>
                <input type="text" id="email-input" placeholder="your@email.com" />
                <label for="message-input">Message:</label>
                <textarea id="message-input" placeholder="Enter your message here." ></textarea>
                <button>Send Icon</button>
            </form>
        </div>
    </section>


<?php get_footer();?>