const { registerBlockType } = wp.blocks;

registerBlockType('gwg/esnext-starter', {
    title: 'Get With Gutenberg - ESNext Starter',
    category: 'common',

    edit(props) {
        return <p className={props.className}>Hello editor.</p>;
    },

    save(props) {
        return <p className={props.className}>Hello saved content.</p>;
    },
});