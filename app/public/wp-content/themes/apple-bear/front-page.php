<?php get_header(); ?>

<div class="homepage">
    <div class="homepage-title-text">
        <h1 id="homepage-home-section">Apple Bear</h1>
    </div>

    <section id="music" class="fp-section orange-background">
    <h2 id="homepage-music-section" class="homepage-section-titles">Music</h2>
        <div>
            <iframe src="https://www.youtube.com/embed/_qm58VgnLjs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="homepage-links homepage-links-icons">
            <a class="a-icon" href="https://www.youtube.com/channel/UCXPAQzWFkDqyBEffKtiSc9g"><i class="fab fa-youtube"></i></a> 
            <a class="a-icon" href="https://applebear.bandcamp.com/"><i class="fab fa-bandcamp"></i></a>
        </div>
    </section>

    <section id="events" class="fp-section transparent-background">
    <h2 id="homepage-event-section" class="homepage-section-titles">Events</h2>
        <div class="events-container">
        <?php 
            $today = date('Ymd');
            $homepageEvents = new WP_QUERY(array(
                'posts_per_page' => 3,
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                    )
                )
            ));

            while($homepageEvents->have_posts()) {
                $homepageEvents->the_post(); ?>
                <div class="event-display">
                    <div class="event-date">
                        <div class="event-month"><?php 
                            $eventDate = new DateTime(get_field('event_date')); 
                            echo $eventDate->format('M');
                        ?></div>
                        <div class="event-day"><?php 
                            echo $eventDate->format('d');
                        ?></div>
                    </div>
                    <div class="event-detail">
                        <div class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="event-location"><?php the_field('event_venue'); ?></div>
                        <div class="event-description"><?php echo wp_trim_words(get_the_content(), 8); ?></div>
                        <a href="<?php the_permalink(); ?>">...More Details</a>
                    </div>
                </div>

            <?php }
        ?>
        </div>
        <div class="homepage-links">
            <a href="<?php echo site_url('/events'); ?>">All Events</a>
        </div>
    </section>

    <section id="contact" class="fp-section orange-background">
    <h2 id="homepage-contact-section" class="homepage-section-titles">Contact</h2>
        <div>
            <form class="contact-form">
                <label for="name-input">Name:</label>
                <input class="contact-input" type="text" id="name-input" placeholder="Namey Namerson" />
                <label for="email-input">Email:</label>
                <input class="contact-input" type="text" id="email-input" placeholder="your@email.com" />
                <label for="message-input">Message:</label>
                <textarea class="contact-input" id="message-input" placeholder="Enter your message here." ></textarea>
                <button>Send Icon</button>
            </form>
        </div>
    </section>
</div>




<?php get_footer();?>