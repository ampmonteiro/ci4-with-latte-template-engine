<?= $this->extend('layouts/default') ?>
<?= $this->section('styles') ?>
<style>
    article {
        display: flex;
        gap: 2rem;

        margin-top: 2rem;
    }

    article>section {
        width: 50%;
    }

    main>section {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-top: 1rem;
    }
</style>
<?= $this->endSection() ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<section>

    <h2>About this page</h2>

    <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

    <p>If you would like to edit this page you will find it located at:</p>

    <pre><code>app/Views/welcome_message.php</code></pre>

    <p>The corresponding controller for this page can be found at:</p>

    <pre><code>app/Controllers/Home.php</code></pre>

</section>

<section>
    <h2> On menu you can find News and Create News As CRUD App</h2>
    <a href="/about">More about the App</a>
</section>

<article>
    <section>
        <h2>
            Learn
        </h2>

        <p>The User Guide contains an introduction, tutorial, a number of "how to"
            guides, and then reference documentation for the components that make up
            the framework. Check the <a href="https://codeigniter4.github.io/userguide" target="_blank">User Guide</a> !</p>
    </section>
    <section>
        <h2>
            Discuss
        </h2>

        <p>CodeIgniter is a community-developed open source project, with several
            venues for the community members to gather and exchange ideas. View all
            the threads on <a href="https://forum.codeigniter.com/" target="_blank">CodeIgniter's forum</a>, or <a href="https://join.slack.com/t/codeigniterchat/shared_invite/zt-rl30zw00-obL1Hr1q1ATvkzVkFp8S0Q" target="_blank">chat on Slack</a> !
        </p>
    </section>
    <section>
        <h2>
            Contribute
        </h2>

        <p>CodeIgniter is a community driven project and accepts contributions
            of code and documentation from the community. Why not
            <a href="https://codeigniter.com/contribute" target="_blank">
                join us</a> ?
        </p>

    </section>

</article>
<?= $this->endSection() ?>