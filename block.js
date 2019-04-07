const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

registerBlockType('gwg/esnext-starter', {
    title: __('Get With Gutenberg - ESNext Starter', 'gwg'),
    category: 'common',

    edit(props) {
        return <p className={props.className}>{__('Hello editor.', 'gwg')}</p>;
    },

    save(props) {
        return <p className={props.className}>{__('Hello saved content.', 'gwg')}</p>;
    },
});