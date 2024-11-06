<style>
    .comment-form textarea{
        border: 2px solid rgb(209 213 219);
        display: block;
        width: 100%;
        border-radius: 0.375rem;
    }
    .comment-respond{
        padding: 1em 0;
    }
    .comment-reply-title{
        text-align: center;
        font-weight: 600;
        padding: 1em 0;
    }
    .comment-notes{
        text-align: center;
    }
    .form-submit{
        text-align: center;
        padding: 1em;
    }
    .form-submit .submit{
        background: #1E1E1E;
        padding: 0.5em 1em;
        border-radius: 5px;
        color: #fff;
    }
</style>
<?php 
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$fields =  array(    
    'author' => '<p class="comment-form-author">' . '<label class="comment-label" for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input class="mb-2 block w-full sm:text-sm border-2 border-gray-300 rounded-md p-3" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
    'email'  => '<p class="comment-form-email"><label class="comment-label" for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input class="mb-2 block w-full sm:text-sm border-2 border-gray-300 rounded-md p-3" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
); 
$comments_args = array(
    'fields' =>  $fields,
    'title_reply'=>'Please share your valuable inputs',
    'label_submit' => 'Submit My View'
); 
comment_form($comments_args);
?> 