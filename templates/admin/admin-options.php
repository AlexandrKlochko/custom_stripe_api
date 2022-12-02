<?php /**
 * @var array $options
 */

?>
<div class="wrap">
    <h1><?php _e('Stripe API Settings', 'custom_stripe_api') ?></h1>

    <form action="<?php echo admin_url('admin-ajax.php') ?>" method="post" id="stripe_settings_form">
        <input type="hidden" name="action" value="save_custom_stripe_api_settings"/>
        <table class="form-table">
            <tbody>
            <tr>
                <th scope="row">
                    <label for="stripe_api_key"><?php _e('API type','custom_stripe_api') ?></label>
                </th>
                <td>
                    <select name="stripe_api_type">
                        <option value="test" <?php if($options['stripe_api_type'] != 'live'):?>selected<?php endif;?>><?php _e('Test')?></option>
                        <option value="live" <?php if($options['stripe_api_type'] == 'live'):?>selected<?php endif;?>><?php _e('Live')?></option>
                    </select>
                </td>
            </tr>
            <tr class="stripe_api_key_row stripe_api_key_row-live">
                <th scope="row">
                    <label for="stripe_api_key"><?php _e('Live API key','custom_stripe_api') ?></label>
                </th>
                <td>
                    <input id="stripe_api_key" name="stripe_api_key" value="<?php echo $options['stripe_api_key'] ?>"
                           style="width: 100%">
                </td>
            </tr>
            <tr class="stripe_api_key_row stripe_api_key_row-test">
                <th scope="row">
                    <label for="stripe_api_key"><?php _e('Test API key','custom_stripe_api') ?></label>
                </th>
                <td>
                    <input id="stripe_api_test_key" name="stripe_api_test_key" value="<?php echo $options['stripe_api_test_key'] ?>"
                           style="width: 100%">
                </td>
            </tr>
            </tbody>
        </table>
        <button class="button button-primary" type="submit">
            <?php _e('Update','custom_stripe_api') ?>
        </button>
    </form>
</div>