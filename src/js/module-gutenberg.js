/**
 * WordPress dependencies
 */
const { __ } = wp.i18n;
const { Fragment } = wp.element;
const { toggleFormat } = wp.richText;
const { RichTextToolbarButton, RichTextShortcut } = wp.editor;
const { registerFormatType } = wp.richText;

/**
 * Block constants
 */
const name = 'editorskit/underline';

export const underline = {
	name,
	title: __( 'Underline' ),
	tagName: 'span',
	className: null,
	attributes: {
		style: 'style',
	},
	edit( { isActive, value, onChange } ) {
		const onToggle = () => {
			onChange(
				toggleFormat( value, {
					type: name,
					attributes: {
						style: 'text-decoration: underline;',
					},
				} ) 
			);
		};
		return (
			<Fragment>
				<RichTextShortcut
					type="primary"
					character="u"
					onUse={ onToggle }
				/>
				<RichTextToolbarButton
					icon="editor-underline"
					title={ __( 'Underline' ) }
					onClick={ onToggle }
					isActive={ isActive }
					shortcutType="primary"
					shortcutCharacter="u"
				/>
			</Fragment>
		);

	},
};

function registerFormats () {
	[
		underline,
	].forEach( ( { name, ...settings } ) => registerFormatType( name, settings ) );
};
registerFormats();