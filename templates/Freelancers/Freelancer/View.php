<!-- templates/Freelancers/Freelancer/View.php -->

<xf:page
    xmlns:xf="http://www.w3.org/1999/xhtml"
    xmlns:xon="http://www.w3.org/1999/xhtml"
    xmlns:ui="http://www.w3.org/1999/xhtml"
    xmlns:content="http://www.w3.org/1999/xhtml"
    xmlns:fb="http://www.w3.org/1999/xhtml"
    class="freelancerProfile"
    title="{$user.username}'s Freelancer Profile"
    tabSelected="freelancers"
>

    <xf:breadcrumb>
        <li itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
            <a href="{xen:link 'path/to/freelancers'}" itemprop="item">
                <span itemprop="name">Freelancers</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
            <a href="{xen:link 'path/to/freelancer', $user}" itemprop="item">
                <span itemprop="name">{$user.username}'s Profile</span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
    </xf:breadcrumb>

    <div class="freelancerDetails">
        <h1>{$user.username}'s Freelancer Profile</h1>
        <!-- Add your freelancer profile details here -->
    </div>

</xf:page>
