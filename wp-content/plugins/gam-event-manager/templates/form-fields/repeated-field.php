<?php 
/**
 * Repeated fields is generated from this page .
 * Repeated fields for the paid and free tickets.
 * This is field is used in submit event form.
 **/
?>
<?php if ( ! empty( $field['value'] ) && is_array( $field['value'] ) ) : ?>

	<?php foreach ( $field['value'] as $index => $value ) : ?>
 
		<div class="repeated-row-<?php echo esc_attr( $key ); ?>">
			
			<a href="#" class="remove-row col-md-2 text-center" id="repeated-row-<?php echo esc_attr( $key.'_%%repeated-row-index%%' ); ?>" ><?php _e( 'Remove', 'gam-event-manager' ); ?></a>
			<a href='#' class="settings" id="<?php echo $key . '_' . $index; ?>"><?php _e( 'Settings', 'gam-event-manager' ); ?></a> 
			<input type="hidden" class="repeated-row" name="repeated-row-<?php echo esc_attr( $key ); ?>[]" value="<?php echo absint( $index ); ?>" />
			<?php foreach ( $field['fields'] as $subkey => $subfield ) : ?>
                    
				<?php if ($subkey == 'ticket_description') : ?>
                      
                        <div class="<?php echo $key .'_' . $index; ?> settings-details">
                <?php endif;?>
                    <fieldset class="fieldset-<?php esc_attr_e( $subkey ); ?>">
					
					   <?php if(!empty($subfield['label'])) : ?>
                          <label for="<?php esc_attr_e( $subkey ); ?>"><?php echo $subfield['label'] . ( $subfield['required'] ? '' : ' <small>' . __( '(optional)', 'gam-event-manager' ) . '</small>' ); ?></label>
					   <?php endif; ?>
                            <div class="field">
                                <?php                                
                                    $subfield['name']  = $key . '_' . $subkey . '_' . $index;
									$subfield['id']  =$key . '_' . $subkey . '_' . $index;   
							        $subfield['value'] = isset( $value[ $subkey ]) ? $value[ $subkey ] : '';
							        get_event_manager_template( 'form-fields/' . $subfield['type'] . '-field.php', array( 'key' => $subkey, 'field' => $subfield ) );
                                ?>
                            </div>
                    </fieldset>
                    
                    <?php if ($subkey == 'ticket_maximum') : ?>
                    </div>
                    <?php endif;?>   
			<?php endforeach; ?>
		</div>
	<?php endforeach; ?>
<?php endif; ?>

<a href="#" class="event_ticket_add_link" data-row="<?php
	ob_start();
	?>
		<div class="repeated-row-<?php echo esc_attr( $key.'_%%repeated-row-index%%' ); ?>">
			
			<a href="#" class="remove-row col-md-2 text-center" id="repeated-row-<?php echo esc_attr( $key.'_%%repeated-row-index%%' ); ?>" ><?php _e( 'Remove', 'gam-event-manager' ); ?></a>
			<a href='#' class="settings" id="<?php echo $key .'_%%repeated-row-index%%'; ?>"><?php _e( 'Settings', 'gam-event-manager' ); ?></a> 
			<input type="hidden" class="repeated-row" name="repeated-row-<?php echo esc_attr( $key ); ?>[]" value="%%repeated-row-index%%" />
			
			<?php  foreach ( $field['fields'] as $subkey => $subfield ) : ?>
            
            <?php if ($subkey == 'ticket_description') : ?>           
            <div class="<?php echo $key .'_%%repeated-row-index%%'; ?> settings-details">           
            <?php endif;?>
				<fieldset class="fieldset-<?php esc_attr_e( $subkey ); ?>">
					<?php if(!empty($subfield['label'])) : ?>
					 <label for="<?php esc_attr_e( $subkey ); ?>"><?php echo $subfield['label'] . ( $subfield['required'] ? '' : ' <small>' . __( '(optional)', 'gam-event-manager' ) . '</small>' ); ?></label>
					<?php endif; ?>
					<div class="field">
					 <div style="position:relative" >
						<?php							
							$subfield['name']  = $key . '_' . $subkey . '_%%repeated-row-index%%';
							$subfield['id']  = $key . '_' . $subkey . '_%%repeated-row-index%%';	
							get_event_manager_template( 'form-fields/' . $subfield['type'] . '-field.php', array( 'key' => $subkey, 'field' => $subfield ) );
						?>
						</div>
					</div>
				</fieldset>
            <?php  if ($subkey == 'ticket_maximum') : ?>
            </div>
            <?php  endif;?>   
			<?php endforeach; ?>
           
		</div>
	<?php
	echo esc_attr( ob_get_clean() );

?>">+ <?php if( ! empty( $field['label'] ) ){ echo $field['label'];};
?></a>
<?php if ( ! empty( $field['description'] ) ) : ?><small class="description"><?php echo $field['description']; ?></small><?php endif; ?>
