<?php /* Template Name: VacancyPage */ ?>

<?php get_header(); ?>
<?php
if ( function_exists( 'pll_current_language' ) ) {
    $locale = pll_current_language();
}
?>

<div class="wrapper">
    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('  '); ?>
</div>

<section class="main-slider-block">
    <div class="wrapper">

        <div class="main-slider-wrapper">
            <?php get_template_part( 'templates/custom','sidebar'); ?>

            <div class="right-wrapper">
                <?php
                $vacancy_title = get_field('vacancy_title');
                $vacancy_list = get_field('vacancy_list');
                $vacancy_form_title = get_field('vacancy_form_title');
                ?>
                <h3 class="header">
                    <?php echo $vacancy_title; ?>
                </h3>
                <?php if ( !empty($vacancy_list) ) : ?>
                    <?php foreach ( $vacancy_list as $vacancy ) : ?>
                        <div class="subheader bordered">
                            <?php  echo $vacancy['name']; ?>
                        </div>
                        <p class="thin-text">
                            <?php  echo $vacancy['descr']; ?>
                        </p>
                        <div class="subheader bordered">
                            <?php  echo $vacancy['musthave_title']; ?>
                        </div>
                        <ul class="list">
                            <?php if (!empty($vacancy['musthave_list'])) : ?>
                                <?php foreach ($vacancy['musthave_list'] as $musthave) : ?>
                                    <li class="list__item">
                                        <?php  echo $musthave['item']; ?>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        <div class="subheader bordered">
                            <?php  echo $vacancy['conditions_title']; ?>
                        </div>
                        <ul class="list">
                            <?php if (!empty($vacancy['conditions_list'])) : ?>
                                <?php foreach ($vacancy['conditions_list'] as $condition) : ?>
                                    <li class="list__item">
                                        <?php  echo $condition['item']; ?>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    <?php endforeach; ?>
                <?php endif; ?>
                <p class="thin-text bordered" >
                    <?php echo $vacancy_form_title; ?>
                </p>
                <?php $form_vacancy = get_field('form_vacancy'); ?>
                <?php echo do_shortcode($form_vacancy); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

